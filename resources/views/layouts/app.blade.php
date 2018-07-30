<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Tag Manager Head -->
  @include('includes.manager_head')

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="description app">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="{{ url('apple-icon.png') }}">
  <link rel="icon" href="{{ url('favicon.png') }}">

  <!-- Normalize CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

  <!-- Font Anwesome CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <!-- Css para esta seccion -->
  @yield('extra_css')

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
  <!-- Tag Manager Body -->
  @include('includes.manager_body')

  <!-- Header User -->
  @yield('header')

  <!-- Content User -->
  @yield('content')

  <!-- Footer User -->
  @yield('footer')

  <!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
  <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript" charset="utf-8"></script> 
  <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

  <!-- Scripts para esta seccion -->
  @yield('scripts')
    
</body>
</html>
