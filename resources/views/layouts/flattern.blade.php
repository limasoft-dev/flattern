<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('flattern/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('flattern/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('flattern/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('flattern/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('flattern/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('flattern/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('flattern/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('flattern/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('flattern/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('flattern/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('flatternparts.topbar')
    @include('flatternparts.topnav')
    @include('flatternparts.hero')
    <main id="main">
        @include('flatternparts.chamadah')
        @include('flatternparts.servicos')
        @include('flatternparts.portfolio')
        @include('flatternparts.clientes')
        @yield('content')
    </main><!-- End #main -->
    <footer id="footer">
        @include('flatternparts.rodape')
        @include('flatternparts.subrodape')
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('flattern/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('flattern/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('flattern/assets/js/main.js')}}"></script>

</body>

</html>
