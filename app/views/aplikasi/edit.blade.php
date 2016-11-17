<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Register CS</title>
<!---------<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css"/>--->
<!-----Berikut ini untuk aplikasi datepicker---->
<link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
<script src="{{ URL::to('js/jquery-1.9.1.js') }}"></script>
<script src="{{ URL::to('js/jquery-ui.js')}}"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#inputdtpckr1" ).datepicker();
$( "#inputdtpckr2" ).datepicker();
$( "#inputdtpckr3" ).datepicker();
$( "#inputdtpckr4" ).datepicker();
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
<h1>Form Edit Aplikasi Register CS</h1>
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<!-- Documentation extras -->
<link href="{{ URL::to('css/signin.css') }}" rel="stylesheet">
<link href="{{ URL::to('css/docs.css') }}" rel="stylesheet">
<link href="{{ URL::to('css/bootstrap-responsive.css')}}" rel="stylesheet">    
<link href="{{ URL::to('css/prettify.css')}}" rel="stylesheet">
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
              <li class="active"><a href="#" data-toggle="tab">Edit Data</a></li>
              <li><a href="{{URL::to('aplikasics')}}" >Home</a></li>
             <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                  <li><a href="#dropdown2" data-toggle="tab">@m</a></li>
                </ul>
              </li>--->
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="home">
              	<div class="container">
                    <?php
                    /*Fungsi Dibawah ini untuk mengambil Data Tembusan pada table Tujuansurats*/
                    $nmtembusan="";
                    $x=count($tembusansurat);
                    $i=1;
                    foreach ($tembusansurat as $key2=>$value2){
                        if($i<$x){
                        $nmtembusan=$nmtembusan.$value2->tembusan.";";
                        }
                        if($i>=$x){
                            $nmtembusan=$nmtembusan.$value2->tembusan;
                        }
                        $i=$i+1;
                    }
                    ?>
                    @foreach($dataedit as $key=>$value)
                        <h1>Edit {{ $value->nomor_surat }}</h1>
                        
                    @endforeach
                    
                    
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($value, array('url' => array('update', $value->nomor_surat_lain), 'method' => 'POST','class'=>'form-control')) }}

	<div class="form-group">
		{{ Form::label('tglmasuk', 'Tanggal Masuk Surat') }}
		{{ Form::text('tanggal_masuk',null ,array('class' => 'form-control','autofocus'=>'','required'=>'','id'=>'inputdtpckr1')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tglsurat1', 'Tanggal Surat') }}
		{{ Form::text('tanggal_surat', null, array('class' => 'form-control','id'=>'inputdtpckr2')) }}
	</div>
	<div class="form-group">
		{{ Form::label('no_surat1', 'Nomor Surat') }}
		{{ Form::text('nomor_surat', null, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('asal', 'Asal Surat') }}
                {{ Form::text('asal_surat',null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('perihal1', 'Perihal Surat') }}
		{{ Form::text('perihal', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('lampiran1', 'Lampiran') }}
		{{ Form::text('lampiran', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('untuk1', 'Tujuan Surat') }}
		{{ Form::text('untuk', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tembusan1', 'Tembusan') }}
		{{ Form::text('tembusan',$nmtembusan,null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Simpan Data', array('class' => 'btn btn-primary')) }}
        {{ Form::reset('Batal Input',array('class' => 'btn btn-primary')) }}
        

{{ Form::close()}}

                </div>
             </div>

        </div>
     </div>
              <!-- Le javascript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ URL::to('js/widgets.js') }}"></script>
    <script src="{{ URL::to('js/jquery.js')}}"></script>
    <script src="{{ URL::to('js/bootstrap-transition.js')}}"></script>
    <script src="{{ URL::to('js/bootstrap-modal.js')}}"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
    <!--<script src="{{ URL::to('js/bootstrap-tab.js')}}"></script>
    <!--<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-popover.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-button.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-carousel.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-typeahead.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-affix.js"></script>

    <script src="http://getbootstrap.com/2.3.2/assets/js/holder/holder.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>

    <script src="http://getbootstrap.com/2.3.2/assets/js/application.js"></script>
------------->
<script src="{{ URL::to('js/jquery-1.10.2.js')}}"></script>
<script src="{{ URL::to('js/bootstrap.js')}}"></script>

<script src="{{ URL::to('js/widgets.js')}}"></script>
<script src="{{ URL::to('js/holder.js')}}"></script>
<script src="{{ URL::to('js/application.js')}}"></script>

<script src="{{ URL::to('js/jquery-1.7.1.min.js')}}"></script>
<script src="{{ URL::to('js/jquery-ui-1.8.16.custom.min.js')}}"></script>
    <!-- Analytics
    ================================================== -->
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>
    
    <!--script untuk buat datepicker-->

</body>
</html>