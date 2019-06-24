<!--Master Class Extended Contains Header & Footer -->
@extends('website.layout.master')
<!-- Title of the page-->
@section('title','Kamalia Khaddi - Speciality of Kamalia')
<!-- Class Property Applied to the body-->
@section('body-class','woocommerce-active page-template-template-homepage-v10')
<!-- Starting of the main content of the website-->
@section('sticky-wrap','')
@section('content')
    <div id="page" class="hfeed site">
        @include('website.layout.navbar')
        <!--Content of The Home Page-->
        @include("website.layout.home.content")
        <!--End of COntent of Home Page-->
        <!--Start of the Footer Common File-->
        @include("website.layout.footer")
        <!--End of the Footer-->
    </div>
@endsection
@section("styles")
    <style>
        @media only screen and (max-width: 600px) {
            #slider-1{
                -webkit-background-size: 411px auto;
                background-size: 411px auto !important;
                margin-top: -140px;
                margin-bottom: -85px;
            }
        }
    </style>

@endsection
@section("scripts")

@endsection
