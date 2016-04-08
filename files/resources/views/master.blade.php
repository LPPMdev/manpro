<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LPPM - Lembaga Penelitian dan Pengabdian pada Masyarakat</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/navbar.css')}}">
	<link rel="icon" type="text/css" href="{{asset('public/images/logo.png')}}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	@yield('css')

</head>
<body style="background: #E5CBB1">
	<nav class="navbar navbar-findcond navbar-fixed-top">
	    <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" style="width: 40px; height: 40px; margin-top: -10px"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
		        <ul class="nav navbar-nav navbar-left">
		        	<li><a href="{{url('/')}}">Home</a></li>
		        	<li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
		            		<ul class="dropdown-menu">	            			
				                <li><a href="{{url('/visi-misi')}}">Visi Misi dan Tujuan</a></li>
				                <li><a href="{{url('/sejarah')}}">Sejarah</a></li>
				                <li><a href="{{url('/staff')}}">Staff</a></li>
		                	</ul>
		            </li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Penelitian <span class="caret"></span></a>
		            		<ul class="dropdown-menu">
				                <li><a href="#">DRPM</a></li>
				                <li><a href="#">UKDW</a></li>
				                <li><a href="#">Kopertis</a></li>
				                <li><a href="#">Pemda</a></li>
				                <li><a href="#">RIP</a></li>
				                <li><a href="#">Penjaminan Mutu</a></li>
		                	</ul>		            	
		            </li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengabdian <span class="caret"></span></a>
		            		<ul class="dropdown-menu">
				                <li><a href="#">DRPM</a></li>
				                <li><a href="#">UKDW</a></li>
				                <li><a href="#">RIPkM</a></li>
				                <li><a href="#">Penjaminan Mutu</a></li>
		                	</ul>		            	
		            </li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KKN <span class="caret"></span></a>
		            		<ul class="dropdown-menu">
				                <li><a href="#">Panduan</a></li>
				                <li><a href="#">Persyaratan Umum</a></li>
				                <li><a href="#">Kopertis</a></li>
				                <li><a href="#">Pengumuman</a></li>
				                <li><a href="#">FAQ</a></li>
				                <li><a href="#">Pendaftaran</a></li>
		                	</ul>		            	
		            </li>
		            <li><a href="#">Kontak</a>
		            </li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
		            	@if(!Auth::check())
		            		@if(!Request::is('login'))
				            	<li>
				            		<a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a>
				            	</li>
				            @endif
		            	@else
		            	<li>user {{Auth::user()->name}}</li>
				            <li>

				            	<a href="{{url('/logout')}}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
				            </li>
				        @endif		            		
		            </ul>
		        </ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
	@yield('scripts')
</body>
</html>