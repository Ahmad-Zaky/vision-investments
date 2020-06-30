<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon.png')}}">
    <title>Vision investments admin panel</title>
	  <link rel="canonical" href="https://www.wrappixel.com/templates/ampleadmin/" />
    <!-- chartist CSS -->
    <link href="/admin_panel/css/chartist.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_panel/css/chartist-plugin-tooltip.css" rel="stylesheet" type="text/css">
    <!--c3 CSS -->
    <link href="/admin_panel/css/morris.css" rel="stylesheet" type="text/css">
    <link href="/admin_panel/css/c3.min.css" rel="stylesheet" type="text/css" >
    <!-- Custom CSS -->
    <link href="/admin_panel/css/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin_panel/css/calendar.css" rel="stylesheet" type="text/css" />
    <!-- needed css -->
    <link href="/admin_panel/css/style.min.css"  rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->
        @include('admin-layout.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin-layout.left-sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            @include('admin-layout.bread-crumb')
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('admin-layout.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->

    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('/admin_panel/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('/admin_panel/js/popper.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('/admin_panel/js/app.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/app.init.mini-sidebar.js')}}"></script>
    <script src="{{asset('/admin_panel/js/app-style-switcher.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('/admin_panel/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('/admin_panel/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('/admin_panel/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('/admin_panel/js/custom.min.js')}}"></script>
    <!-- This Page JS -->
    <script src="{{asset('/admin_panel/js/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('/admin_panel/js/d3.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/c3.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/raphael.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/morris.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/dashboard1.js')}}"></script>
    <script src="{{asset('/admin_panel/js/moment.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('/admin_panel/js/cal-init.js')}}"></script>
    <script>
        $('#calendar').fullCalendar('option', 'height', 650);

    </script>
    @yield('js')

</html>
