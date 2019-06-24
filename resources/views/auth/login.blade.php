@extends("auth._includes.master")
@section("title","Kamalia Khaddi- Admin Login")
@section("body-class","vertical-layout vertical-menu-modern 1-column  bg-full-screen-image menu-expanded blank-page blank-page")
@section("data-open","click")
@section("data-menu","vertical-menu-modern")
@section("data-col","1-column")
{{--Web Content Start--}}
@section("content")
    @include("auth.authentication.loginLayout")
@endsection
{{--Page Level Styles--}}
@section("styles")
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/feather/style.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/plugins/forms/icheck/icheck.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/plugins/forms/icheck/custom.css")}}">
@endsection
{{--Page Level Scripts--}}
@section("scripts")
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/forms/validation/jqBootstrapValidation.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/forms/icheck/icheck.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin-v2/js/pages/form-login-register.js")}}"></script>
@endsection