<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CS</title>
        @if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/docs.css">
        <link rel="stylesheet" href="css/signin.css">
        
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
</head>
<body>
<div class="bs-docs-example">    
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('aplikasi') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('aplikasi') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('aplikasi/create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Input Data Surat Masuk</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'simpan','class'=>'form-signin')) }}

	<div class="form-group">
		{{ Form::label('tglmasuk', 'Tanggal Masuk Surat') }}
		{{ Form::text('tglmasuksurat', Input::old('tglmasuksurat'), array('class' => 'form-control','autofocus'=>'','required'=>'','id'=>'inputdtpckr1')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tglsurat1', 'Tanggal Surat') }}
		{{ Form::text('tglsurat', Input::old('tglsurat'), array('class' => 'form-control','id'=>'inputdtpckr2')) }}
	</div>
	<div class="form-group">
		{{ Form::label('no_surat1', 'Nomor Surat') }}
		{{ Form::text('no_surat', Input::old('no_surat'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('asal', 'Asal Surat') }}
                {{ Form::text('asalsurat', Input::old('asalsurat'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('perihal1', 'Perihal Surat') }}
		{{ Form::text('perihal', Input::old('perihal'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('lampiran1', 'Lampiran') }}
		{{ Form::text('lampiran', Input::old('lampiran'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('untuk1', 'Tujuan Surat') }}
		{{ Form::text('tujuansurat', Input::old('tujuansurat'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tembusan1', 'Tembusan') }}
		{{ Form::text('tembusan', Input::old('tembusan'), array('class' => 'form-control')) }}
	</div>

        <!---<div class="form-group">
		{{ Form::label('jns_pinj', 'Fasilitas/Jenis Pinjaman') }}
		{{ Form::select('jns_pinj', array('0' => 'MM 10', '1' => 'MM 25', '2' => 'MM 50', '3' => 'MM 100', '4' => 'MM 200', '5' => 'MM SUP 500'), Input::old('jns_pinj'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('tgl_krm_unit', 'tgl kirim unit') }}
		{{ Form::text('Unit', Input::old('Unit'), array('class' => 'form-control')) }}
	</div>---->

	{{ Form::submit('Simpan Data', array('class' => 'btn btn-primary')) }}
        {{ Form::reset('Batal Input',array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</div>    
</body>
</html>