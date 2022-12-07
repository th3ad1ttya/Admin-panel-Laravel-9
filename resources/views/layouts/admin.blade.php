<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{getenv('APP_NAME')}} | {{$namePage}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/css/fa/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/admin/css/tempusdominus-bootstrap-4.min')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/admin/css/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/admin/css/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/admin/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/admin/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/admin/css/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/admin/css/summernote-bs4.min.css')}}">

      <!-- Nucleo Icons -->
    <link href="{{ asset('public/admin/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/admin/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('public/admin/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap.min.css') }}" type="text/css"/>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('public/admin/css/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/admin/css/customselectbox.css') }}">
    <link href="{{ asset('public/admin/css/manageprofile.min.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  @livewireStyles
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('layouts.includes.admin.topnavbar')

  @yield('content')

  @include('layouts.includes.admin.sidenavbar')


  <div>
    @include('layouts.includes.admin.footer')
  </div>
  <!-- jQuery -->
<script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/admin/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/admin/js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/admin/js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/admin/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/admin/js/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/admin/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/admin/js/moment.min.js')}}"></script>
<script src="{{asset('admin/js/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/admin/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/admin/css/summernote-bs4.css')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/admin/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/admin/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/admin/js/dashboard.js')}}"></script>

    <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('public/admin/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
  <script src="{{ asset('public/admin/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ asset('public/admin/js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery-3.6.1.min.js') }}"></script>



