@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Almacen</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ingreso de Existencias</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  
  <div class="row">
  
  <div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Guia Nro</label></div>
    <div class="col-md-2"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="000"></div>
    <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="0000000"></div>
    </div>
  
  </div>

  <div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Unidad Negocio</label></div>
    <div class="col-md-8"> 
    
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select>

    </div>

    </div>
  
  </div>

  <div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Fecha de Ingreso</label></div>
     <div class="col-md-8"> <input id="fechallamada" class="form-control" type="date" value="$FECHA_HOY;"></div>

    </div>

  </div>

  <div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Almacen Destino</label></div>
    <div class="col-md-8"> 
    
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select>

    </div>

    </div>
  
  </div>

  </div>

 
  <hr>
  <button type="submit" class="btn btn-success btn-sm btn-block" value="Guardar">Registrar Guia </button>

</form>

  </div>
</div>

@endsection