@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Reportes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reporte General</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  

  <div class="row">
    <div class="col-md-6">
    
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Fecha Inicial</label></div>
    <div class="col-md-8"> <input id="fechallamada" class="form-control form-control-sm" type="date" value="$FECHA_HOY;"></div>

    </div>

</div>

<div class="col-md-6">
    
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Fecha Final</label></div>
    <div class="col-md-8"> <input id="fechallamada" class="form-control form-control-sm" type="date" value="$FECHA_HOY;"></div>

    </div>

</div>

<div class="col-md-6">
    
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Usuario</label></div>
    <div class="col-md-8"> 
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select>
    </div>

    </div>

</div>

<div class="col-md-6">
    
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Instalación</label></div>
    <div class="col-md-8"> 
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select>
    
    </div>

    </div>

</div>

</div>
  
<hr>
  <button type="submit" class="btn btn-primary btn-sm btn-block" value="Guardar">Generar Archivo </button>

</form>

  </div>
</div>

@endsection