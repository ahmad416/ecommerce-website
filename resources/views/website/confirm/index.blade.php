<!--Master Class Extended Contains Header & Footer -->
@extends('website.layout.master')
<!-- Title of the page-->
@section('title','Kamalia Khaddi - Speciality of Kamalia')
<!-- Class Property Applied to the body-->
@section('body-class','woocommerce-checkout woocommerce-page woocommerce-order-received can-uppercase woocommerce-active page-template-template-homepage-v10')
<!-- Starting of the main content of the website-->
@section('content')
    <div id="page" class="hfeed site">
    @include('website.layout.navbar')
    <!--Content of The Home Page-->
        @include('website.confirm.layout');
        <!--End of COntent of Home Page-->
        <!--Start of the Footer Common File-->
    @include("website.layout.footer")
    <!--End of the Footer-->
    </div>
@endsection