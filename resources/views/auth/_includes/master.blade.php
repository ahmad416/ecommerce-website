<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Kamalia Khaddi- Admin Panel">
    <meta name="keywords" content="Kamalia Khaddi Admin Dashboard">
    <meta name="author" content="Muhammmad Ahmad">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <link rel="shortcut icon" href="{{asset("images/website/logos/logo-new.png")}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/core/vendors.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/weather-icons/climacons.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/meteocons/style.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/simple-line-icons/style.css")}}"/>
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/core/app.min.css")}}">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/core/vertical-menu-modern.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/core/palette-gradient.min.css")}}">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/core/style.css")}}">
    <!-- END Custom CSS-->

    @yield("styles")
</head>
<body class="@yield("body-class")" data-open="@yield("data-open")" data-menu="@yield("data-menu")" data-col="@yield("data-col")">
        @yield("content")
        <footer class="footer footer-static footer-light navbar-border navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
                <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="javascript:void(0)" target="_blank">Kamalia Khaddi </a>, All rights reserved. </span>
                <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"> Made with <i class="ft-heart pink"></i></span>
            </p>
        </footer>
    {{--Scripts--}}
    <script src="{{asset("admin-v2/js/core/vendors.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("admin-v2/js/core/app.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("admin-v2/js/core/app-menu.js")}}" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @yield("scripts")
    @include('sweetalert::alert')
</body>