<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

        <!-- style -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="{{ asset('main/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}">
        
        <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('main/css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('main/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('main/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/jquery.timepicker.css') }}">

        
        <link rel="stylesheet" href="{{ asset('main/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/custom.css') }}">

        @yield('style')
    </head>
    <body>
      
      @auth
        @if(auth()->user()->role)
          @include('layouts.components.nav-trainer')
        @else
          @include('layouts.components.nav')
        @endif
      @endauth

      @yield('content')
      
      @auth
        @include('layouts.components.footer')
      @endauth
      
      @auth
        @include('layouts.components.loader')
      @endauth
      
      <!-- script -->
      <script src="{{ asset('main/js/jquery.min.js') }}"></script>
      <script src="{{ asset('main/js/jquery-migrate-3.0.1.min.js') }}"></script>
      <script src="{{ asset('main/js/popper.min.js') }}"></script>
      <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('main/js/jquery.easing.1.3.js') }}"></script>
      <script src="{{ asset('main/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('main/js/jquery.stellar.min.js') }}"></script>
      <script src="{{ asset('main/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('main/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('main/js/aos.js') }}"></script>
      <script src="{{ asset('main/js/jquery.animateNumber.min.js') }}"></script>
      <script src="{{ asset('main/js/bootstrap-datepicker.js') }}"></script>
      <script src="{{ asset('main/js/scrollax.min.js') }}"></script>
      <script src="{{ asset('main/js/main.js') }}"></script>
    </body>
</html>
