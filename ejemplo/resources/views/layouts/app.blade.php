<?

//PLANTILLA 

?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/app.css">
   
    <link rel="stylesheet" href="css/login_style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"  href= "{{asset('css/font-awesome.min.css')}}" />
    
</head>
<body>
    <div class="container">
    
    <br>
        @if ( session()->has('flash'))
        <div class="alert alert-info"> {{ session('flash') }} </div>
        @endif
        @yield('content')
    <hr>
    </div>
</body>
</html>
