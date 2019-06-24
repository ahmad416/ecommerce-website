<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="application-name" content="Kamalia Khaddar">
    <meta name="application-name" content="Khaddar">
    <meta name="application-name" content="Khaddi">
    <meta name="application-name" content="Kamalia Khaddi - Speciality of Kamalia">
    <meta name="description" content="Kamalia Khaddi - Speciality of Kamalia">
    <meta name="description" content="Kamalia Khaddar">
    <meta name="description" content="Khaddar">
    <meta name="keywords" content="Kamalia, Kamalia Khaddi, Khaddi, Kamalia Khaddar,Khaddar ">
    <meta name="author" content="M Ahmad">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/bootstrap-grid.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/bootstrap-reboot.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/font-techmarket.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/slick.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/techmarket-font-awesome.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/slick-style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/website/css/colors/green.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/website/custom.css')}}" media="all"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset("images/website/logos/logo-new.png")}}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125022224-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125022224-1');</script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5DFTDLJ');</script>
    <style>
        .lazy{
            background-image: url('{{asset('images/website/ajax-loader.gif')}}');
            background-repeat: no-repeat;
            background-size: auto !important;
            background-position: center center;
        }
        .dark-code{
            color: #62AB00 !important;
        }
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <!--page Level Style-->
    @yield("styles")
</head>
<body class="@yield('body-class')">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    @yield('content')
    <a href="https://api.whatsapp.com/send?phone=923056316362" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <script type="text/javascript" src="{{asset("/js/website/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/website/tether.js")}}"></script>
    <script type="text/javascript" src="{{asset("/js/website/bootstrap.min.js")}}"></script>
    <!--<script type="text/javascript" src="{{asset("/js/website/jquery-migrate.min.js")}}"></script>-->
    <script type="text/javascript" src="{{asset("/js/website/hidemaxlistitem.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("/js/website/jquery-ui.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("/js/website/jquery.easing.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("/js/website/scrollup.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("/js/website/jquery.waypoints.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/website/waypoints-sticky.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("/js/website/pace.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/website/slick.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/website/scripts.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/website/jquery.lazy.min.js")}}"></script>
    @yield("scripts")
    <script>$(function () {$(".lazy").lazy({})})</script>
    @include('flashy::message')
</body>
</html>