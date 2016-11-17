<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AplikasicsController extends \BaseController {
    
    
        public function inputan(){
        
        $lihat=  Surat::all();
        $kirimdokumen=  Suratkeluar::orderBy('tanggal_kirim')->get();
        
        
        return View::make('aplikasi.register',array('tampungan'=>$lihat,'kirimdokumen'=>$kirimdokumen));
        }
        
        /*public function inputankirim(){
            $lihat=  Surat::paginate(10);
              $kirimdokumen=  Suratkeluar::orderBy('tanggal_kirim')->paginate(10);
        $kirimdokumen->setBaseUrl('aplikasics/kirim');
        
       return View::make('aplikasi.register',array('tampungan'=>$lihat,'kirimdokumen'=>$kirimdokumen));
            
            
        }*/

        public function store(){
        
                                   //Proses Validasi Inputan
            $rules=array(
                'tglmasuksurat'=>'required',
                'tglsurat'=>'required',
                'no_surat'=>'required|min:3|max:55',
                'asalsurat'=>'required',
            );
            
            $validator=Validator::make(Input::all(),$rules);
            $xx=0;
            $checking= Surat::where('nomor_surat','=',Input::get('no_surat'))->get();
            foreach($checking as $kunci=>$nilas){
                $xx=count($nilas->nomor_surat);
            }
            if($xx>0){
                Session::flash('message', '<H1>NOMOR SURAT INI SUDAH ADA !!</H1>');
                return Redirect::to('aplikasics')->withErrors($validator)->withInput();
                    
            }else{
            //process login
            if($validator->fails()){
                return Redirect::to('aplikasi.create')->withErrors($validator)->withInput();
            }else{
                $simpan = new Surat();
                $simpantembusan= new Tujuansurat();
                //berikut cara mengambil nilai dari inputan tanggal agar bisa disimpan 
                //myslq menggunakan format : yyyy-mm-dd : 2013-12-27
                //jika diambil dari <input type="text" name="tanggalprop"></input>, maka pake rumus :
                //substr(Input::get('tanggalprop'), 6, 4)."-".substr(Input::get('tanggalprop'), 0, 2)."-".  substr(Input::get('tanggalprop'), 3, 2);
                //jadinya : 2013-12-12
                //$simpan->tgl_masuk_proposal=substr(Input::get('tanggalprop'), 6, 4)."-".substr(Input::get('tanggalprop'), 0, 2)."-".  substr(Input::get('tanggalprop'), 3, 2);
                $simpan->tanggal_masuk=date('Y-m-d',  strtotime(Input::get('tglmasuksurat')));
                if(Input::get('tglsurat')=='0' or Input::get('tglsurat')==NULL){
                    $simpan->tanggal_surat=NULL;
                }else{
                $simpan->tanggal_surat=date('Y-m-d',  strtotime(Input::get('tglsurat')));}
                $simpan->nomor_surat=Input::get('no_surat');
                $simpan->asal_surat=Input::get('asalsurat');
                $simpan->perihal=Input::get('perihal');
                $simpan->lampiran=Input::get('lampiran');
                $simpan->untuk=Input::get('tujuansurat');
                /*Ambil data pada input tembusan*/

                $kalimat=Input::get('tembusan');
                $hasil=strlen($kalimat);
                $n=0;	
                $a=0;
                $batas=0;
                for ($i=1;$i<=$hasil;$i++) {

                $karakter=substr($kalimat,-$i,1);
                if($karakter==',' && $n==0){
                        $a=$i-1;	
                        $catat=substr($kalimat,-$a);
                        $simpantembusan->nomor_surat=Input::get('no_surat');
                        $simpantembusan->nomor_surat_lain=str_replace('/', '-', Input::get('no_surat'));
                        $simpantembusan->tembusan=$catat;
                        $simpantembusan->save();
                        $batas=$a+2;
                }
                if($karakter==',' && $n>0){
                        $a=$i-1;	
                        $catat=substr($kalimat,-$a,($i-$batas));
                        $simpantembusan= new Tujuansurat();                        
                        $simpantembusan->nomor_surat=Input::get('no_surat');
                        $simpantembusan->nomor_surat_lain=str_replace('/', '-', Input::get('no_surat'));
                        $simpantembusan->tembusan=$catat;
                        $simpantembusan->save();
                        $batas=$a+2;
                }
                if($i==$hasil){
                        $a=$i-1;	
                        $catat=substr($kalimat,-$i,($i-$batas+1));
                        $simpantembusan= new Tujuansurat();
                        $simpantembusan->nomor_surat=Input::get('no_surat');
                        $simpantembusan->nomor_surat_lain=str_replace('/', '-', Input::get('no_surat'));
                        $simpantembusan->tembusan=$catat;
                        $simpantembusan->save();
                }
                if($karakter==','){
                $n=$n+1;
                        }
                }

                /***************************************************************/
                $simpan->nomor_surat_lain=str_replace('/', '-', Input::get('no_surat'));
                $simpan->create_date=date("Y-m-d H:i:s"); 
                $simpan->update_date=date("Y-m-d H:i:s"); 
                $simpan->save();
                Session::flash('message', 'DATA BERHASIL DISIMPAN!');
                return Redirect::to('aplikasics');
        } }
    }
    
        public function show($id)
	{
            $tembusansurat=  Tujuansurat::where('nomor_surat_lain','=',$id)->get();
            $dataedit= Surat::where('nomor_surat_lain','=',$id)->get();
            return View::make('aplikasi/edit',array('dataedit'=>$dataedit,'tembusansurat'=>$tembusansurat));
                
	}
        
        public function update($id){
            /*Hapus Data pada Tabel tujuansurats dengan nomor_surat_lain=$id*/
            $updater=  Tujuansurat::where('nomor_surat_lain','=',$id);
            $updater->delete();
            /*Menyiapkan Object untuk menyimpan data tembusan pada tabel tujuansurats*/
            $simpantembusan= new Tujuansurat();
            /*******************************************/
            $tglterimasurat=NULL;$tglsurat=NULL;
            /*Baca Inputan/Editan tgl masuk surat*/
            if(Input::get('tanggal_masuk')=='0' or Input::get('tanggal_masuk')==NULL){
                $tglterimasurat=NULL;
            }  else {
                $tglterimasurat=date('Y-m-d',  strtotime(Input::get('tanggal_masuk')));
            }
            /*Baca Inputan/Editan tanggal surat*/
            if(Input::get('tanggal_surat')=='0' or Input::get('tanggal_surat')==NULL){
                $tglsurat=NULL;
            }else{
                $tglsurat=date('Y-m-d',  strtotime(Input::get('tanggal_surat')));
            }
            $simpan=array(
                'nomor_surat'=>Input::get('nomor_surat'),
                'tanggal_masuk'=>$tglterimasurat,
                'tanggal_surat'=>$tglsurat,
                'asal_surat'=>Input::get('asal_surat'),
                'perihal'=>Input::get('perihal'),
                'lampiran'=>Input::get('lampiran'),
                'untuk'=>Input::get('untuk'),
                'update_date'=>date("Y-m-d h:i:s")
                 );

                /*Ambil data pada input field tembusan*/
                $kalimat=Input::get('tembusan');
                $hasil=strlen($kalimat);
                $n=0;	
                $a=0;
                $batas=0;
                for ($i=1;$i<=$hasil;$i++) {
                $karakter=substr($kalimat,-$i,1);
                if($karakter==',' && $n==0){
                        $a=$i-1;	
                        $catat=substr($kalimat,-$a);
                        $simpantembusan->nomor_surat=Input::get('nomor_surat');
                        $simpantembusan->nomor_surat_lain=str_replace('/', '-', Input::get('nomor_surat'));
                        $simpantembusan->tembusan=$catat;
                        $simpantembusan->save();
                        $batas=$a+2;
                }
                if($karakter==',' && $n>0){
                        $a=$i-1;	
                        $catat=substr($kalimat,-$a,($i-$batas));
                        $simpantembusan= new Tujuansurat();                        
                        $simpantembusan->nomor_surat=Input::get('nomor_surat');
                        $simpantembusan->nomor_surat_lain=str_replace('/', '-', Input::get('nomor_surat'));
                        $simpantembusan->tembusan=$catat;
                        $simpantembusan->save();
                        $batas=$a+2;
                }
                if($i==$hasil){
                        $a=$i-1;	
                        $catat=substr($kalimat,-$i,($i-$batas+1));
                        $simpantembusan= new Tujuansurat();
                        $simpantembusan->nomor_surat=Input::get('nomor_surat');
                        $simpantembusan->nomor_surat_lain=str_replace('/', '-', Input::get('nomor_surat'));
                        $simpantembusan->tembusan=$catat;
                        $simpantembusan->save();
                }
                if($karakter==','){
                $n=$n+1;
                        }
                }
                /***************************************************************/

                $updatesurat=  Surat::where('nomor_surat_lain','=',$id)->update($simpan);
                Session::flash('message', 'DATA BERHASIL DIUPDATE!');
                return Redirect::to('aplikasics');
        }
        
        public function updatekirim($id){
            $tglkirimdokumen=NULL;
            /*Baca Inputan/Editan tgl masuk surat*/
            if(Input::get('tanggal_kirim')=='0' or Input::get('tanggal_kirim')==NULL){
                $tglkirimdokumen=NULL;
            }  else {
                $tglkirimdokumen=date('Y-m-d',  strtotime(Input::get('tanggal_kirim')));
            }

               $simpan=array(

                'tanggal_kirim'=>$tglkirimdokumen,
                'tujuan'=>Input::get('tujuan'),
                'up'=>Input::get('up'),
                'perihal'=>Input::get('perihal'),
                'pengirim'=>Input::get('pengirim'),
                'update_date'=>date("Y-m-d h:i:s")
                 );
                $updatesurat= Suratkeluar::where('id','=',$id)->update($simpan);
                Session::flash('message', 'DATA BERHASIL DIUPDATE!');
                return Redirect::to('aplikasics');

        }

        public function destroy($id){
            $delete=  Surat::where('nomor_surat_lain','=',$id);
            $delete2= Tujuansurat::where('nomor_surat_lain','=',$id);
               $delete->delete();
               $delete2->delete();
               Session::flash('message', 'DATA BERHASIL DIHAPUS!');
                return Redirect::to('aplikasics');
        }
        
        public function lihat($id){
            
            $lihatsurat= Tujuansurat::where('nomor_surat_lain','=',$id)->get();
            
            return View::make('aplikasi.show',array('lihatsurat'=>$lihatsurat));
        }
        
        public function lihatdokumen($id){
            
            $lihatsurat= Tujuansurat::where('nomor_surat_lain','=',$id)->get();
            
            return View::make('aplikasi.show',array('lihatsurat'=>$lihatsurat));
        }
        
        public function simpandokumen(){
          //Proses Validasi Inputan
            $rules=array(
                'tglkirim'=>'required',
                'tujuandok'=>'required',
                'up'=>'required',
                'perihal'=>'required'

            );
            
            $validator=Validator::make(Input::all(),$rules);
            //process login
            if($validator->fails()){
                return Redirect::to('aplikasi.create')->withErrors($validator)->withInput();
            }else{
                $simpan = new Suratkeluar();
                //berikut cara mengambil nilai dari inputan tanggal agar bisa disimpan 
                //myslq menggunakan format : yyyy-mm-dd : 2013-12-27
                //jika diambil dari <input type="text" name="tanggalprop"></input>, maka pake rumus :
                //substr(Input::get('tanggalprop'), 6, 4)."-".substr(Input::get('tanggalprop'), 0, 2)."-".  substr(Input::get('tanggalprop'), 3, 2);
                //jadinya : 2013-12-12
                //$simpan->tgl_masuk_proposal=substr(Input::get('tanggalprop'), 6, 4)."-".substr(Input::get('tanggalprop'), 0, 2)."-".  substr(Input::get('tanggalprop'), 3, 2);
                $simpan->tanggal_kirim=date('Y-m-d',  strtotime(Input::get('tglkirim')));
                $simpan->tujuan=Input::get('tujuandok');
                $simpan->up=Input::get('up');
                $simpan->perihal=Input::get('perihal'); 
                $simpan->pengirim=Input::get('pengirim');
                $simpan->create_date=date("Y-m-d H:i:s"); 
                $simpan->update_date=date("Y-m-d H:i:s"); 
                $simpan->save();
                Session::flash('message', 'DATA INPUT DOKUMEN BERHASIL DISIMPAN!');
                return Redirect::to('aplikasics');
        } 

        }
        
        public function edit($id){
            //$tembusansurat=  Tujuansurat::where('nomor_surat_lain','=',$id)->get();
            $dataedit= Suratkeluar::where('id','=',$id)->get();
            return View::make('aplikasi/editkirim',array('dataedit'=>$dataedit));
        }

        public function hapus($id){
            $delete= Suratkeluar::where('id','=',$id);

               $delete->delete();
               Session::flash('message', 'DATA BERHASIL DIHAPUS!');
                return Redirect::to('aplikasics');
        }
        
}