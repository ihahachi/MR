<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('setting.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
     <style>
         html,body{
            font-family: 'Abel', sans-serif;
             font-weight: 200;
         }
     </style>
</head>

<body class="bg-info">


        @yield('content')


 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('js/wizard.js') }}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
</body>
</html>
