<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Editing Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('aplikasics') }}">Home</a>
	</div>
	<ul class="nav navbar-nav">
		<!--<li><a href="{{ URL::to('aplikasics') }}">View All Nerds</a></li>--->
		<li><a href="{{ URL::to('aplikasics') }}">Create List</a>
	</ul>
</nav>
@foreach($lihatsurat as $nerd)
@endforeach
	<div class="jumbotron text-center">
		<h2>{{ $nerd->name }}</h2>
		<p>
			<strong>Nomor Surat:</strong> {{ $nerd->nomor_surat }}<br>
			<!---<strong>Tembusan:</strong> {{ $nerd->tembusan }}----->
		</p>
                @foreach($lihatsurat as $nerd)
                Tembusan Surat : {{ $nerd->tembusan }}<p>
                @endforeach
	</div>

</div>
</body>
</html>