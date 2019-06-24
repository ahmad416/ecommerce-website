<!--Master Class Extended Contains Header & Footer -->
@extends('website.layout.master')
<!-- Title of the page-->
@section('title',"Kamalia Khaddi - FAQS")
<!-- Class Property Applied to the body-->
@section('sticky-wrap','')

@section('body-class','page home page-template-default')
<!-- Starting of the main content of the website-->
@section('content')
    <div id="page" class="hfeed site">
    @include('website.layout.navbar')
    <!--Content of The Home Page-->
    @include("website.misc.faqsLayout")
    <!--End of COntent of Home Page-->
        <!--Start of the Footer Common File-->
    @include("website.layout.footer")
    <!--End of the Footer-->
    </div>
@endsection
@section("styles")
    <style>
        #masthead{
            -webkit-box-shadow: 0px 0.5px 0px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0.5px 0px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0.5px 0px 0px rgba(0,0,0,0.75);
        }
    </style>
@endsection