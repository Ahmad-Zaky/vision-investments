<!DOCTYPE html>
<!-- saved from url=(0022)https://vision-tgi.com/ -->
<html lang="en-US" itemscope="" itemtype="http://schema.org/WebPage">
<!-- My Awesome Fonts -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!-- ./My Awesome Fonts -->

@include('front-layout.head')

<body
  class="home page-template page-template-tpl-blank page-template-tpl-blank-php page page-id-38 custom-background wp-custom-logo siteorigin-panels  siteorigin-panels-home woocommerce-js vmagazineprotg hover-effect-1 fullwidth_layout right-sidebar template-one vmagazine-single-layout woocommerce-active"
  data-gr-c-s-loaded="true">
  <div class="vmagazine-mobile-search-wrapper">
    <div class="mob-search-form">
      <div class="img-overlay"></div>
      <div class="mob-srch-wrap">
        <div class="nav-close">
          <span></span>
          <span></span>
        </div>
        <div class="mob-search-wrapp">
          <form method="get" class="search-form" action="https://vision-tgi.com/">
            <label>
              <span class="screen-reader-text">Search for:</span>
              <input type="search" autocomplete="off" class="search-field" placeholder="بحث ..." value="" name="token">
            </label>
            <input type="submit" class="search-submit" value="Search">
          </form>
          <div class="search-content"></div>
          <div class="block-loader" style="display: none;">
            <div class="sampleContainer">
              <div class="loader">
                <span class="dot dot_1"></span>
                <span class="dot dot_2"></span>
                <span class="dot dot_3"></span>
                <span class="dot dot_4"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vmagazine-mobile-navigation-wrapper">
    <div class="mobile-navigation">
      <div class="img-overlay"></div>
      <div class="vmag-opt-wrap">
        <div class="nav-close">
          <span></span>
          <span></span>
        </div>
        <div class="icon-wrapper">
          <ul class="social">
            <li>
              <a href="https://www.facebook.com/" target="_self">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/" target="_self">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://vk.com/" target="_self">
                <i class="fab fa-vk"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/" target="_self">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/" target="_self">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://stocktwits.com/" target="_self">
                <svg id="New_Text_Document" data-name="New Text Document" xmlns="http://www.w3.org/2000/svg" width="10"
                  height="15" viewBox="0 0 18.546 38.957">
                  <path id="Path_38" data-name="Path 38"
                    d="M18.546,22.722,0,13.175V9.662L18.464,0l.026,6.236L7.713,11.362l10.805,5.1Z" fill="#fff"></path>
                  <path id="Path_39" data-name="Path 39"
                    d="M18.546,19.75.085,29.438.056,23.231l10.5-5.154L.029,13.037,0,6.716,18.516,16.27Z"
                    transform="translate(0 9.519)" fill="#fff"></path>
                </svg>
              </a>
            </li>
            <li>
              <a href="https://vision-tgi.com/">
                <div
                  style=" background: url(https://www.fxgate.com/images/gb.svg) no-repeat;   background-size: contain;    width: 25px;    height: 15px; float: left;   display: inline-block;">
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="site-branding">
          <a href="https://vision-tgi.com/">
            <img width="234" height="77" src="images/logo.png"
              class="custom-logo" alt="Vmagazine"></a>
          <div class="site-title-wrapper">
            <div class="site-title-wrapper">
              <h1 class="site-title"><a href="https://vision-tgi.com/" rel="home">Vision Investiments</a></h1>
              <p class="site-description">Vision Investiments Signal</p>
            </div>
          </div>

          <div class="vmagazine-nav-wrapper">
            <div class="vmagazine-container">
              @include('front-layout.main-nav')
              <ul class="site-header-cart">
                <li class="cart-icon ">
                  <a href="/login">
                    <span class="icon">
                      <i class="fas fa-user-circle"></i>
                    </span>
                  </a>
                  <span class="count">0
                  </span>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vmagazine-main-wrapper">
    <div class="vmagazine-mob-outer">
      <div class="vmagazine-mobile-nav-wrapp">
        <div class="mob-search-icon">
          <span>
            <i class="fa fa-search" aria-hidden="true"></i>
          </span>
        </div>
        <div class="vmagazine-logo">
          <a href="https://vision-tgi.com/">
            <img src="images/logo.png" alt="Home">
          </a>
        </div>
        <div class="nav-toggle">
          <div class="toggle-wrap">
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <div class="vmagazine-header-handle">
      @include('front-layout.header')
    </div>
    <div id="content" class="site-content">
      @yield('content')
    </div>
    @include('front-layout.footer')
  </div>
  <script type="text/javascript">
  var c = document.body.className;
  c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
  document.body.className = c;
  </script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var frontend_ajax_object = {
    "ajax_url": "https:\/\/www.vision-tgi.com",
    "ajax_nonce": "d0ad8632df"
  };
  var frontend_js_object = {
    "delay_time": "0",
    "whatsapp_hide": "0",
    "viber_hide": "0",
    "sms_hide": "0",
    "messenger_hide": "0",
    "hide_popup_overlay": "0"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="/js/frontend.js"></script>
  <script type="text/javascript" src="/js/frontend1.js"></script>
  <script type="text/javascript" src="/js/jquery.blockUI.min.js">
  </script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var wc_add_to_cart_params = {
    "ajax_url": "https:\/\/www.vision-tgi.com",
    "wc_ajax_url": "https:\/\/www.vision-tgi.com",
    "i18n_view_cart": "View cart",
    "cart_url": "https:\/\/www.vision-tgi.com",
    "is_cart": "",
    "cart_redirect_after_add": "no"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="/js/add-to-cart.min.js">
  </script>
  <script type="text/javascript" src="/js/js.cookie.min.js"></script>
  <script type="text/javascript">
  /* <![CDATA[ */

  var woocommerce_params = {
    "ajax_url": "https:\/\/www.vision-tgi.com",
    "wc_ajax_url": "https:\/\/www.vision-tgi.com"
  };


  /* ]]> */
  </script>
  <script type="text/javascript" src="/js/woocommerce.min.js"></script>
  <script type="text/javascript" src="/js/jquery.lazy.min.js"></script>
  <script type="text/javascript" src="/js/jquery.mCustomScrollbar2.js"></script>
  <script type="text/javascript" src="/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="/js/navigation.js"></script>
  <script type="text/javascript" src="/js/skip-link-focus-fix.js"></script>
  <script type="text/javascript" src="/js/lightslider.js"></script>
  <script type="text/javascript" src="/js/wow.js"></script>
  <script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="/js/iframe-api.js"></script>
  <script type="text/javascript" src="/js/theia-sticky-sidebar.js"></script>
  <script type="text/javascript" src="/js/slick.min.js"></script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var vmagazine_ajax_script = {
    "mode": "enable",
    "ajax_search": "show",
    "ajaxurl": "/Arabic/ajaxsearch",
    "ajaxurl2": "/Arabic/catajax",
    "fileUrl": "/Arabic/ajaxsearch",
    "lazy": "enable",
    "controls": "1",
    "rtl": "false",
    "preloader": "hide",
    "stickyHeader": "show"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="/js/vmagazine-custom.js">
  </script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var newsletter = {
    "messages": {
      "email_error": "The email is not correct",
      "name_error": "The name is not correct",
      "surname_error": "The last name is not correct",
      "privacy_error": "You must accept the privacy statement"
    },
    "profile_max": "20"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="/js/validate.js"></script>
  <script type="text/javascript" src="/js/wp-embed.min.js"></script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var panelsStyles = {
    "fullContainer": "body"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="/js/styling-2102.min.js">
  </script>
  <script type="text/javascript">
  document.body.className = document.body.className.replace("siteorigin-panels-before-js", "");
  </script>
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/RYPP.js"></script>
  <script type="text/javascript" src="/js/datatables.min.js"> </script>
  <script type="text/javascript" src="/js/tbl-datatable-custom.js"></script>
  <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>


</body>

</html>