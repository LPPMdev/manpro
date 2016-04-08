<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/navbar.css')}}">
    <link rel="icon" type="text/css" href="{{asset('public/images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/toTop.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/custom-button.css')}}">
    @yield('css')
	<title>LPPM - Lembaga Penelitian dan Pengabdian pada Masyarakat</title>
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
				                <li><a href="#">FAQ</a></li>
				                <li><a href="#">Pendaftaran</a></li>
				                <li><a href="#">Lain-lain</a></li>
		                	</ul>		            	
		            </li>
		            <li><a href="{{url('/pengumuman')}}">Pengumuman</a></li>
		            <li><a href="{{url('/berita')}}">Berita</a></li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
		            	@if(!Auth::check())
		            		@if(!Request::is('login'))
				            	<li>
				            		<a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a>
				            	</li>
				            @endif
		            	@else
				            <li class="dropdown">
				            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User {{Auth::user()->name}} <span class="caret"></span></a>
				            		<ul class="dropdown-menu">
		            		<li>
		            			<a href="{{url('tulis-berita')}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Tulis Berita</a>
		            		</li>
		            		<li>
		            			<a href="{{url('buat-pengumuman')}}"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Buat Pengumuman</a>
		            		</li>
				            <li>

				            	<a href="{{url('/logout')}}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
				            </li>
				                	</ul>		            	
				            </li>		            	
				        @endif		            		
		            </ul>
		        </ul>
			</div>
		</div>
	</nav>
	@yield('carousel')
	@yield('content')

@if(!Auth::check())	
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> PROFIL </h3>
                    <ul>
                        <li> <a href="#"> Visi Misi Tujuan </a> </li>
                        <li> <a href="#"> Sejarah </a> </li>
                        <li> <a href="#"> Staff </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> PENELITIAN </h3>
                    <ul>
                        <li> <a href="#"> DRPM </a> </li>
                        <li> <a href="#"> UKDW </a> </li>
                        <li> <a href="#"> Kopertis </a> </li>
                        <li> <a href="#"> Pemda </a> </li>
                        <li> <a href="#"> RIP </a> </li>
                        <li> <a href="#"> Penjaminan Mutu </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> PENGABDIAN </h3>
                    <ul>
                        <li> <a href="#"> DRPM </a> </li>
                        <li> <a href="#"> UKDW </a> </li>
                        <li> <a href="#"> RIPkM </a> </li>
                        <li> <a href="#"> Penjaminan Mutu </a> </li>
                    </ul>
                </div>
                <div  class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
                    <h3> Kontak Kami </h3>
                    <ul id="kontak">
                        <li><span class="glyphicon glyphicon-map-marker"></span> Jl. Dr. Wahidin 5 - 19 Yogyakarta 55224 </li>
                        <li><span class="glyphicon glyphicon-phone-alt"></span> 0274 - 56 39 29 </li>
                        <li><span class="glyphicon glyphicon-print"></span> 0274 - 51 32 35</li>
                        <li><span class="glyphicon glyphicon-envelope"></span> lppm@ukdw.ac.id</li>
                    </ul>                
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Hubungi Kami </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                            	<input type="text" class="full text-center" placeholder="Nama.. ">
                            	<input type="text" class="full text-center" placeholder="Alamat e-mail.. ">
                                <textarea style="height: 100px;" class="full text-center" placeholder="Pesan Anda..."></textarea>
                                <button class="btn  btn-coklat" type="button"> Kirim <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
<div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Website by : MANPRO CERIA 2016. </p>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
@endif

	<script src="{{ asset('public/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/js/toTop.js')}}"></script>
	@yield('scripts')
</body>
</html>
