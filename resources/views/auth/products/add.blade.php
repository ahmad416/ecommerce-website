@extends("auth._includes.master")
@section("title","Kamalia Khaddi - Dashboard | Add New Product")
@section("body-class","vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar")
@section("data-open","click")
@section("data-menu","vertical-menu-modern")
@section("data-col","2-column")
{{--Web Content Start--}}
@section("content")
    @include("auth._includes.topNav")
    @include("auth._includes.sidenav")
    @include("auth.products.addLayout")
@endsection
{{--Page Level Styles--}}
@section("styles")
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/feather/style.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/plugins/forms/tinymce/tinymce.min.css")}}">
@endsection
{{--Page Level Scripts--}}
@section("scripts")
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/forms/tinymce/tinymce.js")}}"></script>
    <script>
        tinymce.init({
            selector: '#lg-desc'
        });
    </script>
@endsection