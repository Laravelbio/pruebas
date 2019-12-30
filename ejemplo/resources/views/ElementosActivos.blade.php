@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Mantenimiento</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ingreso de Activos</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  
  <div class="row">
  
  <div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Unidad de Negocio</label></div>
    <div class="col-md-8"> 
    
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select>

    </div>
    </div>
    </div>
  
  </div>


  <div class="row">
  
  <div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Activos</label></div>
      <div class="col-md-8"> 
    
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select>

    </div>
 </div>
    </div>

  </div>

 <div class="row">
<div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Descripción Activos</label></div>
         <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
                        </select>
        </div>
    </div>
    </div>
    



<div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Código</label></div>
     <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="  Código"></div>

    </div>
    </div> </div>

<div class="row">
<div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Unidad Medida</label></div>
         <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
                        </select>
        </div>
    </div>
    </div>
    



<div class="col-md-6">
  
  <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Denominación</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Denominación"></div>

    </div>




 </div>




  
  </div>


 
  <hr>
  <button type="submit" class="btn btn-success btn-sm btn-block" value="Guardar">Registrar Activos</button>
  
</form>

  </div>
</div>

@endsection