@extends('master2')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/toTop.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/custom-button.css')}}">
@endsection

@section('carousel')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{asset('public/images/carousel/penelitian1.jpg')}}">
          <div class="container">
            <div class="carousel-caption">
              <h1>PENELITIAN</h1>
              <hr/>
              <p>Mengembangkan penelitian-penelitian monodisiplin dan multidisiplin terutama penelitian terapan yang berpihak pada kepentingan masyarakat.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{asset('public/images/carousel/pelatihan1.jpg')}}">
          <div class="container">
            <div class="carousel-caption">
              <h1>PENDIDIKAN DAN PELATIHAN</h1>
              <hr/>
              <p>Melakukan pelatihan khusus untuk meningkatkan kualitas sumber daya manusia dalam rangka menumbuhkan motivasi yang memacu pembangunan masyarakat.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('public/images/carousel/konsultasi1.jpg')}}" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>JASA KONSULTASI</h1>
              <hr/>
              <p>Melakukan kegiatan-kegiatan konsultasi yang meliputi; studi, survey dan investigasi, perencanaan dan perancangan/desain, pelaksanaan fisik dan jasa, manajemen dan supervisi program.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="{{asset('public/images/carousel/sosial1.jpg')}}" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>MANAJEMEN HAKI</h1>
              <hr/>
              <p>Memberikan layanan konsultasi dalam pengelolaan asset intelektual; menyelenggarakan pelatihan untuk eksekutif perusahaan dalam bidang pengelolaan asset intelektual; dan memberi layanan yang menyeluruh dalam menangani pengelolaan asset intelektual yang dimiliki oleh suatu organisasi.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="{{asset('public/images/carousel/kemitraan1.jpg')}}" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>KEMITRAAN</h1>
              <hr/>
              <p>Mengembangkan jejaring (<i>networking</i>) serta menjadi jembatan antara kepakaran UKDW dengan kebutuhan dari luar (institusi pendidikan, pemerintahan, industri, baik di dalam maupun di luar negeri)</p>
            </div>
          </div>
        </div>                  
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
@endsection

@section('content')


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="marketing">


      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{{asset('public/images/placeholders/500x500.png')}}" alt="Generic placeholder image" width="140" height="140">
          <h2 class="header-post">Heading</h2>
          <p class="header-text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-coklat" href="#" role="button">View details &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img class="img-circle" src="{{asset('public/images/placeholders/500x500.png')}}" alt="Generic placeholder image" width="140" height="140">
          <h2 class="header-post">Heading</h2>
          <p class="header-text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-coklat" href="#" role="button">View details &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img class="img-circle" src="{{asset('public/images/placeholders/500x500.png')}}" alt="Generic placeholder image" width="140" height="140">
          <h2 class="header-post">Heading</h2>
          <p class="header-text">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-coklat" href="#" role="button">View details &raquo;</a></p>
        </div>

      </div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading header-post">dadadad
          <p class="lead header-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{asset('public/images/placeholders/500x500.png')}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading header-post">sasasa</h2>
          <p class="lead header-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="{{asset('public/images/placeholders/500x500.png')}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading header-post">dadada dadad</h2>
          <p class="lead header-text">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{asset('public/images/placeholders/500x500.png')}}" alt="Generic placeholder image">
        </div>
      </div>
      <br/><br/><br/>
      </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{asset('public/js/toTop.js')}}"></script>
@endsection