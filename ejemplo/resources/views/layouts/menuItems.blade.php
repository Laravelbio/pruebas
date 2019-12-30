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



 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
 <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/select.js') }}"></script>
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">
  <a class="active"><img class="" src="../img/logo_trinity.jpg"
  style="width: 60px; height: 40px" alt="Generic placeholder image">
  </a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestión
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('gestion.evaluacion') }}">Evaluación</a>
        <a class="dropdown-item" href="{{ route('cargatrabajo') }}">Carga de Trabajo</a>
        <a class="dropdown-item" href="{{ route('Registrarinstalacion') }}">Registrar Instalación</a>
        <a class="dropdown-item" href="{{ route('gestion.registrarcorrectivos') }}">Registrar Correctivos</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Asignación
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('correctivos') }}">Correctivos</a>
  <a class="dropdown-item" href="{{ route('ubicaciones') }}">Ubicaciones</a>
  <a class="dropdown-item" href="{{ route('reasignacion') }}">Reasignación</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Seguimiento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('agendaordentrabajo') }}">Agenda Orden de Trabajo</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Almacen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('ingresoexistencias') }}">Ingreso de Existencias</a>
        <a class="dropdown-item" href="{{ route('salidaexistencias') }}">Salida de Existencias</a>
        <a class="dropdown-item" href="{{ route('Stock') }}">Stock</a>
        <a class="dropdown-item" href="{{ route('Aprobarproducto') }}">Aprobar Productos</a>
        <a class="dropdown-item" href="{{ route('Devoluciones') }}">Devoluciones</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mantenimiento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('Activos') }}">Activos</a>
        <a class="dropdown-item" href="{{ route('unidadmedida') }}">Unida Medida</a>
        <a class="dropdown-item" href="{{ route('ElementosActivos') }}">Elementos Activos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('registrousuarios') }}">Registro</a>
        <a class="dropdown-item" href="#">Gestion de Usuarios</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('reportegeneral') }}">Reporte General</a>
        <a class="dropdown-item" href="{{ route('busqueda') }}">Busqueda</a>
        </div>
      </li>

    </ul>
    <ul class="navbar-nav my-3 my-lg-0">
      
  
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="" src="../img/agente.jpg"
  style="width: 30px; height: 30px" alt="logo admin"> {{ Auth::user()->id_user }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
 document.getElementById('logout-form').submit();"> <img src="../img/X_logo.png" style="width: 20px;" alt="close"> Salir</a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
        </div>
</ul>

  </div>

</nav>

 @yield('content')
</div>

</ul>

<!-- @if (count($errors) > 0)  
 
@foreach ($errors->all() as $error) 
•	{{ $error }}
 @endforeach 
 
 @endif -->



    <!-- Scripts -->
   
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>