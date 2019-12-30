
@extends('layouts.menuItems')

@section('content')



<div class="card" style="background:#ffffffee;">
                  <div class="card-header" >
   
                      <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $detallecliente }}</li>                       
                      </ol>

                      <div class="row">
                            <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                          </div>
                        </div>
                            <div class="col-md-4"></div>
                      </div>
                  </div>


  <div class="card-body">  
    <form action="{{ route('gestion.crearevaluacion') }}" method ="POST">{{ csrf_field() }}
 
                    <input type="text" value="{{ $detallecliente }}" name="nro_documento_id" class="" hidden readonly>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="row form-group"> 
                                <div class="col-md-4"><label for="vendedores" class="secondary">Vendedor</label></div>
                            <div class="col-md-8"> 
                              <select name="vendedores_id" id="vendedores_id" class="form-control form-control-sm" required>
                                              <option value="">SELECCIONE UNA OPCION</option>
                                           }@foreach ($vendedores as $vendedor) 
                                              <option value="{{ $vendedor->id }}">{{ $vendedor->nombres}}</option>
                                            @endforeach  
                                      </select>
                            </div>
                          </div>



                        <div class="row form-group">   
                          <div class="col-md-4"><label for="departamento" class="secondary">Departamento</label></div>
                          <div class="col-md-8"> 
                            <select name="departamentos_id" id="departamento" class="form-control form-control-sm" required>
                              <option value="">SELECCIONE UNA OPCION</option>
                               @foreach ($departamentos as $departamento)
                               <option value="{{ $departamento->id }}">{{ $departamento->descripcion}}</option>
                               @endforeach  
                            </select>
                          </div>
                        </div>
                      </div>
  
                        <div class="col-md-6">   
                          <div class="row form-group"> 
                             <div class="col-md-4"><label for="email_vendedor" class="secondary">Email Vendedor</label></div>
                             <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="email_vendedor" name="email_vendedor" placeholder=""required></div>
                          </div>

                          <div class="row form-group">   
                            <div class="col-md-4"><label for="provincia" class="secondary">Provincia Aqui2</label></div>
                            <div class="col-sm-8 "> 
                              <select name="provincias_id" id="provincia" class="form-control form-control-sm">
                                <option value="">SELECCIONE UNA OPCIONes</option>                                                     
                              </select>
                            </div>
                          </div>
                        </div>
                    </div>
    

                    <div class="row">

                      <div class="col-md-6">
                        <div class="row form-group">  
                          <div class="col-md-4"><label for="distrito" class="secondary">Distrito</label></div>
                          <div class="col-sm-8 "> 
                            <select name="distritos_id" id="distrito" class="form-control form-control-sm">
                              <option value="">SELECCIONE UNA OPCION</option>                                                       
                            </select>
                          </div>
                        </div>

                            <div class="row form-group">   
                              <div class="col-md-4"><label for="coordenadas" class="secondary">Coordenadas</label></div>
                              <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="coordenadas" name="coordenadas" placeholder="" required></div>
                            </div>
                      </div>
              
                        <div class="col-md-6">
                          <div class="row form-group">
                            <div class="col-md-4"><label for="poliza" class="secondary">Tipo Póliza</label></div>
                            <div class="col-md-8"> 
                              <select name="polizas_id" id="polizas" class="form-control form-control-sm">
                    <option value="">SELECCIONE UNA OPCION</option>

                      @foreach ($polizas as $poliza)
                      <option value="{{ $poliza->id }}">{{ $poliza->nombre}}</option>
                      @endforeach

                  </select>
                            </div>
                          </div>                 
                        </div>

                    </div>

                  <br>
                  <div class="row">
                    <div class="col-md-2">Observaciones:</div>
                    <div class="col-md-10"> 
                      <textarea class="ckeditor" name="observaciones" id="editor1" rows="10" cols="80" required></textarea>
                    </div>
                  </div>
                <br>
               <hr>
              <button type="submit" class="btn btn-success btn-sm btn-block" value="">Registrar Visita Tecnica</button>


    </form>
  </div>
</div>




<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection