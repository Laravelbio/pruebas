@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Carga Trabajo</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
  

  <div class="row">
    <div class="col-md-6">
    
    
    <div class="row form-group">
    
        <div class="col-md-3"><label for="" class="">Tipo de Plantilla</label></div>
        <div class="col-md-9">
        
        <div class="form-check">
            <label class="form-check-label">
             <input class="form-check-input" type="radio" name="Radios" id="Radios1" value="option1" checked>
              Formato 1 : Otros Trabajos
            </label>
        </div>
        </div>
    


    </div>

    <div class="row form-group">
    
    <div class="col-md-3"></div>
    <div class="col-md-9">

<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="Radios" id="Radios2" value="option2">
    Formato 2 : Instalacion
  </label>
</div>
    </div>

</div>


</div>
  
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="" class="secondary">  <label for="exampleFormControlFile1">Seleciona un Archivo</label></label></div>
    <div class="col-md-8"> 
   
  
    <input type="file" class="form-control-file form-control-sm" id="exampleFormControlFile1">

    </div>

</div>


<div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Archivo a cargar</label></div>
    <div class="col-md-8"> <input class="form-control form-control-sm" type="text" placeholder="Readonly input here…" readonly></div>

</div>
    </div>

    </div>
   
  <hr>
  <button type="submit" class="btn btn-info btn-sm btn-block" value="Guardar">Cargar</button>

</form>

  </div>
</div>

@endsection