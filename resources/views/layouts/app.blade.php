<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte2/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte2/css/skins/_all-skins.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('css')

</head>


<body class="skin-blue sidebar-mini">

<div class="wrapper">
    @include('layouts.menu.header')
    @include('layouts.menu.sidebar')

    <div class="content-wrapper">
        <section class="content-header">

            <div class="container-fluid">
                @include('flash::message')
            </div>

            @yield('content')
        </section>
    </div>

    <div class="control-sidebar-bg"></div>
</div>

<script src="{{ asset('components/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('components/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminlte2/js/adminlte.min.js') }}"></script>
<script src="{{ asset('components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('components/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>

@yield('js')

</body>

</html>
