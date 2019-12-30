@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Mantenimiento</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ingreso de Unidad de Medida</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  

  <div class="row">
    <div class="col-md-6">
    
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Unidad de Medida</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Unidad Medida"></div>

    </div>

</div>
  
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Unidad de Negocio</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Unidad Negocio"></div>


    </div>

</div>


<div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Multiplicador</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Multiplicador"></div>


    </div>

</div>
<div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Número Métrico</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Número Métrico"></div>


    </div>

</div>

<div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Unidad Métrica</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Unidad Métrica"></div>


    </div>

</div>






    </div>
   
  <hr>
  <button type="submit" class="btn btn-success btn-sm btn-block" value="Guardar">Registrar Unidad</button>

</form>

  </div>
</div>

@endsection