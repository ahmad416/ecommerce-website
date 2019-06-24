@extends("auth._includes.master")
@section("title","Kamalia Khaddi - Dashboard | Slider")
@section("body-class","vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar")
@section("data-open","click")
@section("data-menu","vertical-menu-modern")
@section("data-col","2-column")
{{--Web Content Start--}}
@section("content")
    @include("auth._includes.topNav")
    @include("auth._includes.sidenav")
    @include("auth.slider.layout")
@endsection
{{--Page Level Styles--}}
@section("styles")
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/feather/style.css")}}">
@endsection
{{--Page Level Scripts--}}
@section("scripts")

@endsection