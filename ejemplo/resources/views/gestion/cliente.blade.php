@extends('layouts.cliente')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Clientes</a></li>
                        
                      </ol>


  </div>
  <div class="card-body">

<table class="table table-sm table-responsive table hover">

<thead>
<tr>
<th scope ="col">#</th>
<th scope ="col">DNI</th>
<th scope ="col">NOMBRES</th>
<th scope ="col">APELLIDOS</th>
<th scope ="col">DIRECCION</th>
<th scope ="col">TELEFONO</th>
<th scope ="col">Accion</th>
</tr>
</thead>
<tbody>
@foreach($clientes as $item)
<tr>
<th scope ="row">{{$item->id}}</th>
<th>{{$item->dni}}</th>
<th>{{$item->nombres}}</th>
<th>{{$item->apellidos}}</th>
<th>{{$item->direccion}}</th>
<th>{{$item->telefono}}</th>
<th><a href="´{{ route('gestion.evaluacionform' , $item) }}" class="btn btn-primary btn-sm">Seleccionar</a></th>
</tr>
@endforeach()
</tbody>

</table>
  

</div>

</div>
  
    






@endsection