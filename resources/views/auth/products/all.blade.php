@extends("auth._includes.master")
@section("title","Kamalia Khaddi - Dashboard | All Products")
@section("body-class","vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar")
@section("data-open","click")
@section("data-menu","vertical-menu-modern")
@section("data-col","2-column")
{{--Web Content Start--}}
@section("content")
    @include("auth._includes.topNav")
    @include("auth._includes.sidenav")
    @include("auth.products.allLayout")
@endsection
{{--Page Level Styles--}}
@section("styles")
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/feather/style.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/plugins/datatable/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/css/plugins/animate/animate.min.css")}}">
@endsection
{{--Page Level Scripts--}}
@section("scripts")
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/datatable/datatables.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/datatable/datatable-styling.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/modal/components-modal.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin-v2/js/custom/script.js")}}"></script>
    <script>
        $("#deleteProduct").on('submit',function () {
            return confirm("Are you sure?");
        })
    </script>
@endsection