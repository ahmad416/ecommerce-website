<!--Master Class Extended Contains Header & Footer -->
@extends('website.layout.master')
<!-- Title of the page-->
@section('title')
    {{$single["product-name"]}}-Kamalia Khaddi
@endsection
<!-- Class Property Applied to the body-->
@section('sticky-wrap','techmarket-sticky-wrap')

@section('body-class','woocommerce-active single-product full-width normal')
<!-- Starting of the main content of the website-->
@section('content')
    <div id="page" class="hfeed site">
    @include('website.layout.navbar')
    <!--Content of The Home Page-->
    @include("website.singleProduct.layout")
        <!--End of COntent of Home Page-->
        <!--Start of the Footer Common File-->
    @include("website.layout.footer")
    <!--End of the Footer-->
    </div>
@endsection
@section("scripts")
    <script src="{{asset("js/website/jquery.elevatezoom.js")}}"></script>
    <script>$("#zoom-img").elevateZoom({zoomType: "inner",cursor: "crosshair",scrollZoom : true});</script>
@endsection