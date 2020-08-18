<!doctype html>
<html class="no-js" dir="rtl" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title', '')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
  <!-- Place favicon.ico in the root directory -->
  <!-- all css here -->
  <!-- bootstrap v3.3.6 css -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- font-awesome css -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- animate css -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <!-- hover-min css -->
  <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
  <!-- magnific-popup css -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- meanmenu css -->
  <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
  <!-- owl.carousel css -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
  <!-- lightbox css -->
  <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
  <!-- nivo slider CSS -->
  <link rel="stylesheet" href="{{asset('css/custom-slider/css/nivo-slider.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/custom-slider/css')}}/preview.css" type="text/css" media="screen" />
  <!-- style css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- responsive css -->
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  @yield('head')
  <style>
  /*** Custom Styling Overwriting existing styles ***/
  .container {
    width: 100% !important;
  }

  /*
        .paddimg-left-none {
            padding-left: 0;
            padding-right: 0;
        } */
  </style>
  <!-- modernizr js -->
  <script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body class="home">
  <!--Preloader area Start here-->
  <div class="preloader">
    <div class="sk-cube-grid">
      <div class="sk-cube sk-cube1"></div>
      <div class="sk-cube sk-cube2"></div>
      <div class="sk-cube sk-cube3"></div>
      <div class="sk-cube sk-cube4"></div>
      <div class="sk-cube sk-cube5"></div>
      <div class="sk-cube sk-cube6"></div>
      <div class="sk-cube sk-cube7"></div>
      <div class="sk-cube sk-cube8"></div>
      <div class="sk-cube sk-cube9"></div>
    </div>
  </div>
  <!--Preloader area end here-->

  <!--Header area start here-->
  @include('front-layout.header')
  <!--Header area end here-->
  <!-- Slider Section Start Here -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
        <div class="wrapper">
          <!-- News Slider -->
          <div class="ticker marg-botm">
            <div class="ticker-wrap">
              <!-- News Slider Title -->
              <div class="tickers col-md-10">
                <div id="top-news-slider" class="owl-carousel ">
                  <div class="item">
                    <a href="blog-single.html"> <img src="images/breaking/1.jpg" alt="news image"> <span>Migrants Told:
                        Stay in France </span></a>
                  </div>
                  <div class="item">
                    <a href="blog-single.html"><img src="images/breaking/2.jpg" alt="news image"> <span>Duo Scripta An
                        The Prieirmod</span></a>
                  </div>
                  <div class="item">
                    <a href="blog-single.html"><img src="images/breaking/3.jpg" alt="news image"> <span>Two Loser Idaho
                        Pot Smugglers </span></a>
                  </div>
                  <div class="item">
                    <a href="blog-single.html"><img src="images/breaking/4.jpg" alt="news image"> <span>Car racer gives
                        herself a mid-Event</span></a>
                  </div>
                  <div class="item">
                    <a href="blog-single.html"><img src="images/breaking/5.jpg" alt="news image"> <span>Aaron Rodgers
                        Criticizes </span></a>
                  </div>
                  <div class="item">
                    <a href="blog-single.html"> <img src="images/breaking/1.jpg" alt="news image"> <span>Detroit Natives
                        Wary & Recovery</span></a>
                  </div>
                  <div class="item">
                    <a href="blog-single.html"><img src="images/breaking/4.jpg" alt="news image"> <span>Clinton campaign
                        jilted as FBI</span></a>
                  </div>
                </div>
              </div>
              <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i class="fa fa-angle-double-left"></i>
              </div>
            </div>
          </div>
          <!-- End News Slider -->
        </div>
      </div>
      @yield('slider-content')
      <!-- Slider Area End Here-->
    </div>
  </div>
  <!-- Slider Section end Here -->
  <!-- All News Section Start Here -->
  @yield('content')
  <!-- All News Section end Here -->
  <!-- Footer Area Section Start Here -->
  <div class="add-section separator-large2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img src="images/footer-top.png" alt="footer">
        </div>
      </div>
    </div>
  </div>
  @include('front-layout.footer')

  <!-- Start scrollUp  -->
  <div id="return-to-top">
    <span>Top</span>
  </div>
  <!-- End scrollUp  -->

  <!-- Footer Area Section End Here -->

  <!-- all js here -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- jquery latest version -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- jquery-ui js -->
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- meanmenu js -->
  <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
  <!-- wow js -->
  <script src="{{asset('js/wow.min.js')}}"></script>
  <!-- owl.carousel js -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <!-- magnific-popup js -->
  <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

  <!-- jquery.counterup js -->
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.js')}}"></script>
  <!-- jquery light box -->
  <script src="{{asset('js/lightbox.min.js')}}"></script>
  <!-- Nivo slider js -->
  <script src="{{asset('js/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/custom-slider/home.js')}}" type="text/javascript"></script>
  <!-- main js -->
  <script src="{{asset('js/main.js')}}"></script>
  @yield('footer')
</body>

</html>