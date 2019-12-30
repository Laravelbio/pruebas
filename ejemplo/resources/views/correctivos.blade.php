@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Asignación</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Correctivos</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  

  <div class="row">
    <div class="col-md-6">
    
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Codigo Abonado</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder=""></div>

    </div>

</div>
  
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nro Documento</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder=""></div>


    </div>

</div>




    </div>
   
  <hr>
  <button type="submit" class="btn btn-info btn-sm btn-block" value="Guardar">Buscar Agenda</button>

</form>

  </div>
</div>

@endsection