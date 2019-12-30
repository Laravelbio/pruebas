<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TrinityFS</title>

    <!-- Styles -->




<link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
   

 
</head>

<body>
    

<div class="container-fluid">

@yield('content')

</div>



    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>