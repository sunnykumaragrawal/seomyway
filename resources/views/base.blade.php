<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="q-bf9cHFi_0uxLvlQe5TykL_50vyx4uRca-OOttf4lQ" />
  <title>@yield('title','Sunny Agrawal')</title>
  <meta name="description" content="@yield('meta_desc')">
  <meta name="keywords" content="@yield('meta_keywords')">

  <meta name="author" content="Sunny Agrawal">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/#hero">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#whyus">Why</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/blog">Blogs</a></li>
          <li><a href="/#contact">Contact</a></li>
          <li><a href="/#socialmedia">Follow Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="flip-down" data-aos-delay="100">
    <div class="container">
      <div class="copyright">
        Created By:  <a href="https://sunnyagrawal.in/">Sunny Agrawal</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="https://api.whatsapp.com/send?phone=917770951212" class="whatsapp-logo"><img src="{{asset('assets/img/whatsapp.png')}}" class="img-fluid"></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>