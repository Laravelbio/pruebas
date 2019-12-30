
<?

// EJECUCION DE LOGIN EN LA PLANTILLA 

?>

@extends('layouts.app')

@section('content')  

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      
       
 
 
  
<div class="container"> 

    <div class="row">
    <div class="panel-body">
    <div class="panel-body">
    <div class="panel-heading"></div>
    
    <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">


            
            <div class="panel-heading"></div>
            
            <img src="img/logo_trinity.jpg" style="width: 400px; height: 250px" class="img-thumbnail">

            <div class="panel-body">

            <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="id_user">Usuario</label>
                            <input class="form-control" 
                            type="text"
                            name="id_user"
                            value="{{ old('id_user') }}"
                            placeholder="Ingrese Su Usuario">

                           <strong> {!! $errors->first('id_user')!!}</strong>
                        </div>

                        
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="Password">Contraseña</label>
                            <input class="form-control" 
                            type="password"
                            name="password"
                            placeholder="Ingrese Su Contraseña">
                            <strong>{!! $errors->first('password')!!}</strong>
                        </div>
                        <button class="btn btn-primary btn-block">Ingresar</button>
                
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


   