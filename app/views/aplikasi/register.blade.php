<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Register CS</title>
<!---------<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css"/>--->
<!-----Berikut ini untuk aplikasi datepicker---->
<!--<link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
<script src="{{ URL::to('js/jquery-1.9.1.js') }}"></script>
<script src="{{ URL::to('js/jquery-ui.js')}}"></script>--->
<link rel="stylesheet" href="/resources/demos/style.css">

    
<!-----------------------Untuk Datatables----------------------------------------->
<link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ URL::to('css/dataTables.jqueryui.css') }}">
<script src="{{ URL::to('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::to('js/jquery-ui.js') }}"></script>
<script src="{{ URL::to('js/jquery.dataTables.min.js') }}"></script>

        <script>
            $(document).ready(function() {
           $("#profile").tabs( {
                "activate": function(event, ui) {
                $( $.fn.dataTable.tables( true ) ).DataTable().columns.adjust();
                }
            } );
           
            $("#profiledokumen").tabs( {
                "activate": function(event, ui) {
                $( $.fn.dataTable.tables( true ) ).DataTable().columns.adjust();
                }
            } );
            
                $('table.display').dataTable( {
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": true,
                    "jQueryUI": true
                } );
            } );
        </script>        
<!---------------------------------------------------------------->



<script>
$(function() {
$( "#inputdtpckr1" ).datepicker();
$( "#inputdtpckr2" ).datepicker();
$( "#inputdtpckr3" ).datepicker();
$( "#inputdtpckr4" ).datepicker();
$( "#inputdtpckr5" ).datepicker();
});


</script>
    <style type="text/css">
        select{
            background-color:#F00;
            width: 200px;
        }
    </style>

<!-- Bootstrap core CSS -->
<link href="{{ URL::to('css/bootstrap.css') }}" rel="stylesheet">
<h1>Aplikasi Register CS</h1>
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<!-- Documentation extras -->
<link href="{{ URL::to('css/signin.css') }}" rel="stylesheet">
<link href="{{ URL::to('css/docs.css') }}" rel="stylesheet">
<link href="{{ URL::to('css/bootstrap-responsive.css') }}" rel="stylesheet">    
<link href="{{ URL::to('css/prettify.css') }}" rel="stylesheet">
    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://getbootstrap.com/2.3.2/assets/ico/favicon.png">

</head>

<body>
<div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#surat" data-toggle="tab">Input Data Surat Masuk</a></li>
              <li><a href="#memo" data-toggle="tab">Input Data Memo Masuk</a></li>
              <li><a href="#suratkeluar" data-toggle="tab">Input Data Pengiriman Dokumen</a></li>
              <li><a href="#profile" data-toggle="tab">Lihat Data/Pencarian Data</a></li>
              <li><a href="#profiledokumen" data-toggle="tab">Lihat Data Pengiriman Dokumen/Pencarian Data</a></li>
              <!----<li><a href="#realisasi" data-toggle="tab">Data Sudah Realisasi</a></li>
              <li><a href="#setujuibelumcair" data-toggle="tab">Disetujui Belum Cair</a></li>              
              <li><a href="#tidaksetuju" data-toggle="tab">Proposal Tidak Disetujui</a></li>------>
              <li class="dropdown">
                <!---<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                  <li><a href="#dropdown2" data-toggle="tab">@m</a>            </li>
                </ul>--->
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="surat">
              	<div class="container">
                 
                    <form id="form1" class="form-signin" name="form1" method="post" action="simpan">
                                <p>
                                    <label for="input2">Nomor Surat</label>
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat" value="<?php echo Form::old('no_surat') ?>" id="input2" required autofocus>
                                    <label>Tanggal Masuk Surat</label>
                                    <input type="text" class="form-control" placeholder="Tanggal Masuk Surat" name="tglmasuksurat" value="<?php echo Form::old('tglmasuksurat') ?>" id="inputdtpckr1" required>
                                    <label for="input2">Tanggal Surat</label>
                                    <input type="text" class="form-control" placeholder="Tanggal Surat" name="tglsurat" value="<?php echo Form::old('tglsurat') ?>" id="inputdtpckr2" required >
                                    <label for="input2">Asal Surat</label>
                                    <input type="text" class="form-control" placeholder="Asal Surat" name="asalsurat" value="<?php echo Form::old('asalsurat') ?>" id="input2" >
                                    <label for="input2">Perihal</label>
                                    <input type="text" class="form-control" placeholder="Perihal" name="perihal" value="<?php echo Form::old('perihal') ?>" id="input2" >
                                    <label for="input2">Lampiran</label>
                                    <input type="text" class="form-control" placeholder="Lampiran" name="lampiran" value="<?php echo Form::old('lampiran') ?>" id="input2" >
                                    <label for="input2">Tujuan Surat</label>
                                    <input type="text" class="form-control" placeholder="Tujuan Surat" name="tujuansurat" value="<?php echo Form::old('tujuansurat') ?>" id="input2" >
                                    <label for="input2">Tembusan Surat</label>
                                    <input type="text" class="form-control" placeholder="Tembusan Surat" name="tembusan" value="<?php echo Form::old('tembusan') ?>" id="input2" >
                                <p>
                                <p>
                                <label> </label>
                                <button type="submit" class="btn btn-large btn-primary" name="simpan" id="simpan" value="Submit" >Simpan</button>
                                <button type="reset" class="btn btn-large btn-primary" name="cancel" id="cancel" value="Submit" >Batal </button>
                                </p>
                                    <p>
                                    </p>
                              </p>
                </form>

                </div>
            </div>
              <div class="tab-pane fade" id="memo">
                 
                      <div class="container">
                 
                        <form id="form1" class="form-signin" name="form1" method="post" action="simpan">
                                        <p>
                                <label for="input2">Nomor Memo</label>
                                <input type="text" class="form-control" placeholder="Nomor Memo" name="no_surat" value="<?php echo Form::old('no_surat') ?>" id="input2" required autofocus>
                                <label>Tanggal Masuk Memo</label>
                                <input type="text" class="form-control" placeholder="Tanggal Masuk Memo" name="tglmasuksurat" value="<?php echo Form::old('tglmasuksurat') ?>" id="inputdtpckr3" required>
                                <label for="input2">Tanggal Surat</label>
                                <input type="text" class="form-control" placeholder="Tanggal Surat" name="tglsurat" value="<?php echo Form::old('tglsurat') ?>" id="inputdtpckr4" required >
                                <label for="input2">Asal Surat</label>
                                <input type="text" class="form-control" placeholder="Asal Surat" name="asalsurat" value="<?php echo Form::old('asalsurat') ?>" id="input2" >
                                <label for="input2">Perihal</label>
                                <input type="text" class="form-control" placeholder="Perihal" name="perihal" value="<?php echo Form::old('perihal') ?>" id="input2" >
                                <label for="input2">Lampiran</label>
                                <input type="text" class="form-control" placeholder="Lampiran" name="lampiran" value="<?php echo Form::old('lampiran') ?>" id="input2" >
                                <label for="input2">Tujuan Memo/Surat</label>
                                <input type="text" class="form-control" placeholder="Tujuan Surat" name="tujuansurat" value="<?php echo Form::old('tujuansurat') ?>" id="input2" >
                                <label for="input2">Tembusan Memo/Surat</label>
                                <input type="text" class="form-control" placeholder="Tembusan Surat" name="tembusan" value="<?php echo Form::old('tembusan') ?>" id="input2" >
                            <p>
                            <p>
                            <label> </label>
                            <button type="submit" class="btn btn-large btn-primary" name="simpan" id="simpan" value="Submit" >Simpan</button>
                            <button type="reset" class="btn btn-large btn-primary" name="cancel" id="cancel" value="Submit" >Batal </button>
                            </p>
                                <p>
                                </p>
                          </p>
                        </form>

                       </div>
                 
              </div>
                
                <div class="tab-pane fade" id="suratkeluar">
                    <div class="container">
                 
                        <form id="form1" class="form-signin" name="form1" method="post" action="simpandokumen">
                                        <p>
                                <label>Tanggal Kirim Doukumen</label>
                                <input type="text" class="form-control" placeholder="Tanggal Kirim Doukumen" name="tglkirim" value="<?php echo Form::old('tglkirim') ?>" id="inputdtpckr5" required>
                                <label for="input2">Tujuan Dokumen</label>
                                <input type="text" class="form-control" placeholder="Tujuan Dokumen" name="tujuandok" value="<?php echo Form::old('tujuandok') ?>" id="input2" >
                                <label for="input2">UP</label>
                                <input type="text" class="form-control" placeholder="up" name="up" value="<?php echo Form::old('up') ?>" id="input2" >
                                <label for="input2">Perihal Dokumen</label>
                                <!--<input type="text" class="form-control" placeholder="Perihal" name="perihal" value="<?php echo Form::old('perihal') ?>" id="input2" >--->
                                <textarea class="form-control" name="perihal" cols="45" rows="5"  id="input3" placeholder="Perihal"></textarea>                                    
                                <label for="input2">Pengirim</label>
                                <input type="text" class="form-control" placeholder="Pengirim" name="pengirim" value="<?php echo Form::old('pengirim') ?>" id="input2" >
                            <p>
                            <p>
                            <label> </label>
                            <button type="submit" class="btn btn-large btn-primary" name="simpan" id="simpan" value="Submit" >Simpan</button>
                            <button type="reset" class="btn btn-large btn-primary" name="cancel" id="cancel" value="Submit" >Batal </button>
                            </p>
                                <p>
                                </p>
                          </p>
                        </form>

                       </div>
                </div>
                <div class="tab-pane fade" id="profile">
                <p>
                   
                    <div>
                        <p>
                           <a href="{{URL::to('cari/data')}}">Pencarian Data </a>
                    </div>
                    <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <td>No.Urut</td>
                                    <td>Nomor Memo / Surat</td>
                                    <td>Tanggal Masuk</td>
                                    <td>Tanggal Memo / Surat</td>
                                    <td>Asal Surat</td>
                                    <td>Perihal</td>
                                    <td>Lampiran</td>
                                    <td>Untuk</td>
                                    <td>Option</td>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    ?>
                                @foreach($tampungan as $value)
                                   
                                        <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $value->nomor_surat }}</td>
                                                <td>
                                                    @if($value->tanggal_masuk==NULL)
                                                    {{$value->tanggal_masuk}}
                                                    @else
                                                    {{ date('d/m/Y',strtotime($value->tanggal_masuk))}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($value->tanggal_surat==NULL)
                                                    {{$value->tanggal_surat}}
                                                    @else
                                                    {{ date('d/m/Y',strtotime($value->tanggal_surat))}}
                                                    @endif
                                                </td>
                                                <td>{{ $value->asal_surat }}</td>
                                                <td>{{ $value->perihal }}</td>
                                                <td>{{ $value->lampiran }}</td>                                                
                                                <td>{{ $value->untuk }}</td>                                                
                                                <!-- we will also add show, edit, and delete buttons -->
                                                <td>
                                                        <a class="btn btn-small btn-success" href="{{ URL::to('aplikasi/'.$value->nomor_surat_lain.'/hapus')}}">Hapus</a>
                                                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                                        <a class="btn btn-small btn-info" href="{{ URL::to('aplikasi/'.$value->nomor_surat_lain)}}">Edit</a>
                                                        <a class="btn btn-small btn-info" href="{{ URL::to('aplikasi/'.$value->nomor_surat_lain).'/show'}}">Lihat Data</a>
                                                </td>
                                        </tr>
                                        <?php
                                        $no=$no+1;
                                        ?>
                                @endforeach
                                </tbody>
                       
 
                    </table>
<!-----Fungsi dibawah untuk paginasi -------------------->                    
   
           
                </p>
                </div>
                
                <div class="tab-pane fade" id="profiledokumen">
                    <p>
                   
                    <div>
                        <p>
                           <a href="{{URL::to('cari/data')}}">Pencarian Data </a>
                    </div>
                    <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <td>No.Urut</td>
                                    <td>Tanggal Kirim</td>
                                    <td>Tujuan</td>
                                    <td>UP</td>
                                    <td>Perihal</td>
                                    <td>Pengirim</td>
                                    <td>Option</td>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    ?>
                                @foreach($kirimdokumen as $value)
                                   
                                        <tr>
                                                <td>{{ $no }}</td>
                                                <td>
                                                    @if($value->tanggal_kirim==NULL)
                                                    {{$value->tanggal_kirim}}
                                                    @else
                                                    {{ date('d/m/Y',strtotime($value->tanggal_kirim))}}
                                                    @endif
                                                </td>
                                                <td>{{ $value->tujuan }}</td>
                                                <td>{{ $value->up }}</td>
                                                <td>{{ $value->perihal }}</td>                                                
                                                <td>{{ $value->pengirim }}</td>                                                
                                                <!-- we will also add show, edit, and delete buttons -->
                                                <td>
                                                        <a class="btn btn-small btn-info" href="{{ URL::to('aplikasi/'.$value->id.'/editkirim')}}">Edit</a>                                                    
                                                        <a class="btn btn-small btn-success" href="{{ URL::to('aplikasi/'.$value->id.'/hapusdatakirim')}}">Hapus</a>
                                                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->

                                                        <a class="btn btn-small btn-info" href="{{ URL::to('aplikasi/'.$value->id).'/lihatkirim'}}">Lihat Data</a>
                                                </td>
                                        </tr>
                                        <?php
                                        $no=$no+1;
                                        ?>
                                @endforeach
                                </tbody>
 
                    </table>
<!-----Fungsi dibawah untuk paginasi -------------------->                    
                </p>
                </div>
                
            </div>
          </div>
        <script src="{{ URL::to('js/bootstrap.js') }}"></script>

</body>
</html>