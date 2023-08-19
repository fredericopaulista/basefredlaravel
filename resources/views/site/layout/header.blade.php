<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('site/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('site/assets/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('site/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ env('APP_NAME') }}" title="{{  env('APP_NAME') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
       Logo Site
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="nav-link"><a href="#"><span>Home</span> </a>

          </li>
@foreach ($navlinks as $category )
<li><a class="nav-link " href="{{ route('site.categoria', $category->slug) }}">{{ $category->name }}</a></li>
@endforeach
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>

    </div>
  </header><!-- End Header -->
