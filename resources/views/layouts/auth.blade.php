<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/iCheck/all.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte2/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte2/css/skins/_all-skins.min.css') }}">

    @yield('css')

</head>


<body class="hold-transition login-page">

<div class="login-box">

    <div class="login-logo">
        <a href="/"><b>Laravel</b> Admin</a>
    </div>

    @include('flash::message')

    @yield('content')
</div>

<script src="{{ asset('components/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('components/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('components/iCheck/icheck.min.js') }}"></script>

@yield('js')

</body>

</html>
