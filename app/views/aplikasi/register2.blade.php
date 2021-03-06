<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Register CS</title>
<!---------<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css"/>--->
<!-----Berikut ini untuk aplikasi datepicker---->

<!--<script src="{{ URL::to('js/jquery-1.9.1.js') }}"></script>
<script src="{{ URL::to('js/jquery-ui.js')}}"></script>--->
<link rel="stylesheet" href="/resources/demos/style.css">

<!--------Untuk Datatables---------------->
<script src="{{ URL::to('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ URL::to('js/jquery-ui.js')}}"></script>
<script src="{{ URL::to('js/jquery.dataTables.min.js')}}"></script>
<link href="{{ URL::to('css/jquery-ui.css')}}"  rel="stylesheet">
<link href="{{ URL::to('css/dataTables.jqueryui.css')}}"  rel="stylesheet">




<!---------------------------------------->
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
    
        $("#tab6").tabs( {
        "activate": function(event, ui) {
            $( $.fn.dataTable.tables( true ) ).DataTable().columns.adjust();
        }
    } );

     $('table.display').dataTable( {
        "scrollY": "200px",
        "scrollCollapse": true,
        "paging": false,
        "jQueryUI": true
    } );

   
} );
</script>    
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
              <li><a href="#tab6" data-toggle="tab">Tab6</a></li>
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

                    <div class="container">

                           
                    
                  <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    
                                    <td>Nomor Memo / Surat</td>
                                    <td>Tanggal Masuk</td>
                                    <td>Tanggal Memo / Surat</td>
                                    <td>Asal Surat</td>
                                    <td>Perihal</td>
                                    <td>Lampiran</td>
                                    <td>Untuk</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            
                                @foreach($tampungan as $value)
                                    
                                <tbody>
                                        <tr>
                                                
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
                                 
                                @endforeach
                                </tbody>
 
                        </table>

                        </div>
   
                </div>
                
                <div class="tab-pane fade" id="profiledokumen">
                    <p>
                   
                  
                         <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <td>No.Urut</td>
                                    <td>Tanggal Kirim</td>
                                    <td>Tujuan</td>
                                    <td>UP</td>
                                    <td>Perihal</td>
                                    <td>Pengirim</td>
                                    <td>dgdgd</td>
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
   
           
<!-----Batas Fungsi paginasi -------------------->                    
                </p>
                </div>
                
                <div class="tab-pane fade" id="tab6">
                    <div class="container">
        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
 
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>

                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>
                    </div>
                </div>
            </div>
          </div>
              <!-- Le javascript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <!--<script type="text/javascript" src="{{ URL::to('js/widgets.js') }}"></script>
    <script src="{{ URL::to('js/jquery.js')}}"></script>
    <script src="{{ URL::to('js/bootstrap-transition.js')}}"></script>
    <script src="{{ URL::to('js/bootstrap-modal.js')}}"></script>
    <!--<script src="js/jquery-1.10.2.js"></script>-->
    <script src="{{ URL::to('js/bootstrap.js') }}"></script>
    
</body>
</html>