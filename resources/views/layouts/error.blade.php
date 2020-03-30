<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>{{ __('Error') }}</title>

    <link rel="stylesheet" href="{{ asset('components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte2/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte2/css/skins/_all-skins.min.css') }}">

</head>


<body class="hold-transition login-page">

<div class="login-box">
    @yield('content')
</div>

</body>
</html>
