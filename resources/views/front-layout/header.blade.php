<header>
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="social-media-area">
            <nav>
              <ul>
                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <div class="header-top-left">
            <ul>
              <li><span id="today"></span></li>
              <li><a href="account.html">Join / Sign In</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li>London, 27 <sup>o</sup> C</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="right-banner">
            <img src="images/add/1.png" alt="add image">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="logo-area">
            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom-area" id="sticky">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-left search hidden-mobile">
          <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search"></i></a>
          <div id="search" class="collapse search-box">
            <input type="text" class="form-control" placeholder="Search...">
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
          <div class="navbar-header">
            <div class="col-sm-8 col-xs-8 padding-null">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
              <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search"></i></a>
              <div id="search-mobile" class="collapse search-box">
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </div>
          </div>
          <div class="main-menu navbar-collapse collapse">
            @include('front-layout.main-nav')
          </div>
        </div>
      </div>
    </div>
  </div>
</header>