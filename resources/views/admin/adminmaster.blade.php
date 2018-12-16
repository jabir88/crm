<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradient Able bootstrap admin template by codedthemes </title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      <!-- Favicon icon -->
      <link rel="icon" href="{{asset('admin/')}}/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font --><link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/css/style.css">
      <link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/css/jquery.mCustomScrollbar.css">
      <style media="screen">


      .select2-container--default .select2-selection--single .select2-selection__rendered{
        background-color: #fff;
          color: #000;
      }
      </style>
  </head>

  <body>
  <body>

       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">


          @include('admin.inc.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                  @include('admin.inc.nav')

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            @yield('contents')
                        </div>
                    </div>
                </div>
            </div>
        </div>


<script type="text/javascript" src="{{asset('admin/')}}/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('admin/')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('admin/')}}/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="{{asset('admin/')}}/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('admin/')}}/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('admin/')}}/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="{{asset('admin/')}}/pages/widget/amchart/amcharts.min.js"></script>
<script src="{{asset('admin/')}}/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{asset('admin/')}}/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{asset('admin/')}}/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('admin/')}}/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="{{asset('admin/')}}/js/script.js"></script>
<script type="text/javascript " src="{{asset('admin/')}}/js/SmoothScroll.js"></script>
<script src="{{asset('admin/')}}/js/pcoded.min.js"></script>
<script src="{{asset('admin/')}}/js/vartical-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="{{asset('admin/')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

@yield('script_here')
</body>

</html>
