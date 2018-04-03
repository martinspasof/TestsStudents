<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>

    @yield('head')

</head>
<body>
@include('layouts.nav')
<br/>

<div class="container">
    @yield('index-content')
    @yield('footer_scripts')
</div>
</body>
</html>