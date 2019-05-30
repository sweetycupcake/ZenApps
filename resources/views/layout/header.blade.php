<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zeninth EO - Your Event Solution</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fix.css') }}" rel="stylesheet" type="text/css"/>

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link rel='stylesheet' href="{{ asset ('https://use.fontawesome.com/releases/v5.7.0/css/all.css')}}" integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/measure.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
  <header id="header">
    <div class="container">
      <div class="logo float-left">
        <h1 class="text-light"><a href="{{ url('/') }}" class="scrollto"><span>ZEN</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#about">Mitra EO</a></li>
          <li>
              <a href="#" class="widget-header mr-3">
                <i style="font-size: 16pt" class="icon fa fa-shopping-basket"></i>
              </a>
          </li>
          <li>
              <a href="#" class="widget-header mr-3">
                <i style="font-size: 16pt" class="icon fa fa-bell"></i>
              </a>
          </li>
           <li>
                <div class="input-group">
                    <div class="form-group has-search">
                    <form action="{{url('/search')}}" method="post" id="searchPaket">
                    {{ csrf_field() }}
                        <span class="fa fa-glip fa-search form-control-feedback"></span>
                        <input type="text" class="form-controls form-control" name="paket" placeholder="Cari...">
                    </form>
                    </div>
                </div>
            </li>
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalLogin">LOGIN</a></li> 
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegist">REGISTER</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
