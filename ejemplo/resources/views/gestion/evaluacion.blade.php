@extends('layouts.menuItems')

@section('content')



<div class="card" style="background:#ffffffee;">

                              <div class="card-header" >

                                    <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                                      <li class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                                    </ol>  

                                <div class="row">
                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                    <div class="progress" style="height: 4px;">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                    </div>
                                  </div>

                                    <div class="col-md-4"></div>
                                </div> 

                              </div>

  <div class="card-body">
    
    <form action="{{ route('gestion.crearcliente') }}" method ="POST"> 


                                          <legend><h6 style="font-weight: 700">INFORMACIÓN CLIENTE</h6></legend>
                                  
                                    {{ csrf_field() }}
                                          @if (session('mensaje'))
                                            <div class="alert alert-success">
                                             {{ session('mensaje') }}
                                                <button type="button" class="close" data-dismiss ="alert" aria-label="Close"><span aria-hidden = "true">&times;</span></button>
                                            </div>
                                          @endif

                                          @if ($errors->has('*'))
                                            <div class="alert alert-danger"> Cliente no registrado Por Favor llenar todos los campos
                                              <button type="button" class="close" data-dismiss ="alert" aria-label="Close"><span aria-hidden = "true">&times;</span></button>
                                            </div>
                                          @endif

                                               @if ($errors->has('nombres'))@endif
                                               @if ($errors->has('apellidos'))@endif
                                               @if ($errors->has('direccion'))@endif
                                               @if ($errors->has('telefono'))@endif



                                              <div class="row">

                                                <div class="col-md-6">   

                                                  <div class="row form-group"> 

                                                    <div class="col-md-4"><label for="tipo_documento" class="secondary">Documento Cliente</label></div>
                                                    <div class="col-md-4">
                                                          <!--<label for="exampleInputEmail1" class="secondary"><a href="{{ route('gestion.cliente') }}" target="popup"onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=900px,height=600px'); return false;"><img src="../img/lupa.png" width="20 alt=""></a></label>-->
                                                      <select name="tipo_documento" id="" value="{{old('tipo_documento')}}" class="form-control form-control-sm">
                                                          <option value="">SELECCIONE TIPO</option>
                                                          <option value="DNI">DNI</option>
                                                          <option value="RUC">RUC</option>
                                                          <option value="CE">CARNE DE EXTRANJERÍA</option>
                                                      </select>
                                                    </div>

                                                      <div class="col-md-4"> 
                                                       <input type="text" class="form-control form-control-sm " id="nro_documento" name="nro_documento" value="{{ old('nro_documento') }}" placeholder="Ingrese Nro Docuemnto">
                                                      </div>                                               
    
                                                  </div>

                                                    <div class="row form-group">
                                                      <div class="col-md-4"><label for="nombres" class="secondary">Nombres</label></div>
                                                      <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="nombres" name="nombres" value="{{ old('nombres') }}" placeholder="Ingrese nombres"></div>                                                  
                                                    </div>
                                                    <div class="row form-group">    
                                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Apellidos</label></div>
                                                      <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="apellidos" name="apellidos" value="{{ old('apellidos') }}" placeholder="Ingrese apellidos"></div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                  <div class="row form-group"> 
                                                     <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Direccion</label></div>
                                                     <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="direccion" name="direccion" value="{{ old('direccion') }}" placeholder="Ej: Av Libertador calle 5 casa nro 4""></div>
                                                  </div>

                                                  <div class="row form-group">    
                                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Telefono</label></div>
                                                    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ej: 04147727145"></div>
                                                  </div>
                                                </div>

                                              </div>

                                          <button type="submit" class="btn btn-success btn-sm btn-block" value="">Continuar</button>
    </form>
  </div>
</div>

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection