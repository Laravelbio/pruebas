@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Reportes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Busqueda</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  

  <div class="row">
    <div class="col-md-4">
    
    
    <div class="row form-group">
    <div class="col-md-1"></div>
    <div class="col-md-11"><input id="" class="form-control form-control-sm" type="text" value="" placeholder="Documento"></div>

    </div>

</div>

<div class="col-md-4">
    
    
    <div class="row form-group">
    
    <div class="col-md-1"></div>
    <div class="col-md-11"><input id="" class="form-control form-control-sm" type="text" value="" placeholder="Codigo de Abonado"></div>


    </div>

</div>

<div class="col-md-4">   
<div class="row form-group">
    
    <div class="col-md-1"></div>
    <div class="col-md-9"> 
    <select name="" id="" class="form-control form-control-sm">
    <option value="">SERVICIOS</option>
    
    </select>
    
    </div>
    <div class="col-md-2"><button type="submit" class="" value="Guardar"><img src="../img/lupa.png" width="20 alt=""></button></div>

</div>
</div>

</div>
  


</form>

  </div>
</div>

@endsection