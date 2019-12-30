@extends('layouts.menuItems')

@section('content')
<br>
<div class="card border-info mb-20" style="max-width: 100rem;">

        
                              
                                  <div class="card-header" style="max-height: 10rem;">

                                    <div class="card text-white bg-info pacity mb-20" style="max-height: 12rem;"class="panel-heading">
                                     <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                                      <li  class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                                      <li  class="breadcrumb-item " class="text-white" aria-current="page">Ingreso de Correctivos</li>
                                     </ol>                                  
                                     <ol  class="col-md-4" class="breadcrumb-item active" aria-current="page" class="text-black"><h6>Documentos: {{ $detallecliente }} / {{ $nombrecliente}} </h6></ol>
                                    </div>

                                    <div class="row">                        
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4">
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                        </div>
                                      </div>                                      
                                    </div> 
                                    
                                  </div>
                               
                                
                              <br>
                          {{---------------------------------------------------------------------------}}
                          
  <div class="card-body">
    <div class="panel-body">

                                <div class="form-horizontal">
                            
                                    <legend><h6 style="font-weight: 700">INFORMACIÓN CORRECTIVOS</h6></legend><hr>

      <form action="{{ route('gestion.crearcorrectivos') }}" method ="POST">{{ csrf_field() }}<input type="text" value="{{ $detallecliente }}" name="documento_cliente" class="" hidden readonly>

                                    <div class="row">

                                      <div class="col-md-4">  

                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Ejecutivo Comercial</label></div>
                                          <div class="col-md-6">
                                            <select name="vendedores" id="vendedor" class="form-control form-control-sm" required>
                                              <option value="">SELECCIONE UNA OPCION</option>
                                              @foreach ($vendedores as $vendedor) 
                                                <option value="{{ $vendedor->id }}">{{ $vendedor->nombres}} &nbsp {{ $vendedor->apellidos}}</option>
                                              @endforeach  
                                            </select>
                                          </div>
                                        </div>
                          
                                          <div class="row form-group"> 
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Póliza</label></div>
                                            <div class="col-md-6">
                                              <select name="polizas_id" id="poliza" class="form-control form-control-sm">
                                                <option value="">SELECCIONE UNA OPCION</option>
                                                  @foreach ($polizas as $poliza)
                                                  <option value="{{ $poliza->id }}">{{ $poliza->nombre}}</option>
                                                  @endforeach
                                              </select>
                                            </div>
                                          </div>
                                      </div>


                                      <div class="col-md-4">

                                        <div class="row form-group">                      
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Supervisor</label></div>                                         
                                            <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="id" name="supervisors" placeholder=""></div>
                                          {{-- se llena automaticamente, cuando se seleciona el ejecutivo Comercial,    Ejecutivo Comercial-->Supervisor --}}
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Instalación</label></div>
                                          <div class="col-md-6"> 
                                            <select name="tipoinstalaciones" id="" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>
                                                 @foreach ($tipoinstalacion as $tipo) 
                                                <option value="{{ $tipo->id }}">{{ $tipo->nombre}}</option>
                                              @endforeach 
                                            </select>
                                          </div>
                                        </div>

                                      </div>

                                    </div>



                                            <br><br>
                                            <legend><h6 style="font-weight: 700">INFORMACIÓN ADICIONAL CLIENTE: {{ $detallecliente}} /  {{ $nombrecliente }}</h6></legend><hr>

                                            <div class="row">
                                              <div class="col-md-4">               
                                                <div class="row form-group"> 
                                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Código Abonado</label></div>
                                                    <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="codigo_abonado" name="codigo_abonado" placeholder=""></div>
                                                </div>                           
                                              </div>                                   
                                            </div>
               
                                                                         
                               

                                            <div class="row">

                                              <div class="col-md-4">
                                      
                                                <div class="row form-group">
                                                  <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Departamento</label></div>
                                                  <div class="col-md-6"> 
                                                    <select name="departamentos" id="departamento" class="form-control form-control-sm" required>
                                                      <option value="">SELECCIONE UNA OPCION</option>
                                                       @foreach ($departamentos as $departamento)
                                                         <option value="{{ $departamento->id }}">{{ $departamento->descripcion}}</option>
                                                      @endforeach  
                                                    </select>
                                                  </div>
                                                </div>                      

                                                <div class="row form-group"> 
                                                  <div class="col-md-4"><label for="distrito" class="secondary">Distrito</label></div>
                                                  <div class="col-md-6">
                                                    <select name="distritos" id="distrito" class="form-control form-control-sm">
                                                      <option value="">SELECCIONE UNA OPCION</option>
                                                    </select>
                                                  </div>
                                                </div>

                                                <div class="row form-group">
                                                  <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Referencia</label></div>
                                                  <div class="col-md-6">
                                                     <textarea id="referencia" name="referencia" class="form-control" cols="2" rows="2"></textarea>
                                                  </div>
                                                </div>
                                              
                                              </div>

                                                

                                                <div class="col-md-4">
                                                  <div class="row form-group">                                            
                                                    <div class="col-md-4"><label for="provincia" class="secondary">Provincia</label></div>
                                                    <div class="col-md-6"> 
                                                      <select name="provincias" id="provincia" class="form-control form-control-sm">
                                                        <option value="">SELECCIONE UNA OPCION</option>
                                                      </select>
                                                    </div>
                                                  </div>                                                                                                                                                                                  
                                                  <div class="row form-group">
                                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Telefono</label></div>
                                                    <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="nro_poliza" name="nro_poliza" placeholder=""></div>                                
                                                  </div>                                                                  
                                                  <div class="row form-group">
                                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nro Póliza</label></div>
                                                    <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="nro_poliza" name="nro_poliza" placeholder=""></div>                                
                                                  </div>
                                                </div>                                               
                                              
                                                                                                                      
                                            </div>

                                   
                                        
                                      
                                     

                                        <br> 
                  
                                      <div class="row">

                                        <div class="col-md-4">                 
                                          <div class="row form-group">
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Asistencia</label></div>
                                            <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="asistencia" name="asistencia" placeholder=""></div>
                                          </div>
                          
                                          <div class="row form-group"> 
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Hora Llamada</label></div> 
                                            <div class="col-md-6"><input id="horallamada" name="horallamada" class="form-control" type="time" value="$horahoy;"></div>
                                          </div>
                                        </div>


                                        <div class="col-md-4">
                                          <div class="row form-group">                                     
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Fecha Llamada</label></div>
                                            <div class="col-md-6"> <input id="fechallamada" name="fechallamada" class="form-control" type="date" value='UTC'></div>
                                          </div>                      
                                        </div>

                                      </div>


                                    <div class="row">

                                      <div class="col-md-4">                
                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Contacto</label></div> 
                                          <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="contacto" name="contacto" placeholder=""></div>
                                        </div>
                          
                                        <div class="row form-group"> 
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Asunto</label></div>
                                          <div class="col-md-6">
                                            <select name="asunto" id="asunto" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>
                                              <option value="asunto">Asunto</option>
                                              {{-- Seleccion de la base de Dato (1Programacion Técnica, 2Garantía Service, 3Preventivos), y en TEMA se activa para hacer la selecion segun
                                              lo que se aplica aca de los 3--}}
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="row form-group">                                  
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Número Contacto</label></div>
                                          <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="nro_contacto" name="nro_contacto" placeholder=""></div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tema</label></div>
                                          <div class="col-md-6"> 
                                            <select name="tema" id="tema" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>
                                              <option value="tema">Tema</option>                                  
                                            </select>
                                          </div>
                                        </div>
                                      </div>  

                                    </div>

                                     <br><br><br>
                
                                    <div class="row">
                                      <div class="col-md-0">Observaciones:</div>
                                      <div class="col-md-8"> 
                                        <textarea class="ckeditor" name="observaciones" id="editor1" rows="10" cols="80"></textarea>
                                      </div>
                                    </div>

                                   <hr>
                                    <div class="col-md-9"> 
                                  <button type="submit" class="btn btn-success btn-sm btn-block" value="">Agendar</button>
                                   </div>
      </form>
    </div>  
  </div>
</div>

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection