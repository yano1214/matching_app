<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>

<script type="module" src="{{ asset('js/app.js') }}" ></script>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    @yield('content')

    <!-- Scripts -->
    <!-- 必須 -->



  <!-- <script src="https://js.pusher.com/7.2/pusher.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script> -->
<!-- <script>src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"</script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.0.1/pusher.min.js" ></script> -->
<!-- <script type="module" src="{{ asset('js/app.js') }}" ></script> -->
</body>

</html>
