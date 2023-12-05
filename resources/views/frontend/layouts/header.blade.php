<!DOCTYPE html>

<html class="wide wow-animation" lang="en">

  <head>

    <!-- Site Title-->

    <title>@yield('title')</title>

    <meta name="format-detection" content="telephone=no">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">

    <link rel="icon" href="/homeprojects/public/frontend/images/logo-ig.png" type="image/x-icon">

    <!-- Stylesheets-->

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Fira+Sans:300,600,800,800i%7COpen+Sans:300,400,400i">

    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css')}}"/>

		<!--[if lt IE 10]>

    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>

    <script src="js/html5shiv.min.js"></script>

		<![endif]-->

  </head>

  <body>

    <div class="preloader">

      <div class="cssload-container">

        <svg class="filter" version="1.1">

          <defs>

            <filter id="gooeyness">

              <fegaussianblur in="SourceGraphic" stddeviation="10" result="blur"></fegaussianblur>

              <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness"></fecolormatrix>

              <fecomposite in="SourceGraphic" in2="gooeyness" operator="atop"></fecomposite>

            </filter>

          </defs>

        </svg>

        <div class="dots">

          <div class="dot mainDot"></div>

          <div class="dot"></div>

          <div class="dot"></div>

          <div class="dot"></div>

          <div class="dot"></div>

        </div>

        <p>DEDICATED TO WORK...</p>

      </div>

    </div>

    <!-- Page-->

  <div class="page">

    @include('frontend.layouts.navigation')

      <!-- Swiper-->

       @yield('content')

      <!-- our client -->



      <section class="section-md text-center bg-default d-none">

        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 130, &quot;smoothness&quot;: 30}"><img src="/projects/public/frontend/images/bg-decor-4.png" alt=""/>

        </div>

        <div class="container">

          <h4 class="heading-decorated">Our Clients</h4>

          <div class="row row-30">

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-1-126x102.png" alt="" width="126" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-2-134x102.png" alt="" width="134" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-3-132x102.png" alt="" width="132" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-4-126x102.png" alt="" width="126" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-5-138x102.png" alt="" width="138" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-6-143x102.png" alt="" width="143" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-7-109x102.png" alt="" width="109" height="102"/></a></figure>

            </div>

            <div class="col-sm-6 col-md-3">

              <figure class="box-icon-image"><a href="#"><img src="/projects/public/frontend/images/company-8-109x102.png" alt="" width="109" height="102"/></a></figure>

            </div>

          </div>

        </div>

      </section>

      @include('frontend.layouts.footer')

    <!-- Global Mailform Output-->

    <div class="snackbars" id="form-output-global"></div>

    <!-- Javascript-->

    <script src="{{ asset('/frontend/js/core.min.js')}}"></script>

    <script src=" {{ asset('/frontend/js/script.js')}}"></script>
   

     @yield('js')

     

  </body>

</html>