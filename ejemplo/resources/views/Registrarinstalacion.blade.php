
@extends('layouts.menuItems')

@section('content')
<br>
<div class="card" style="background:#ffffffee;">
            <div class="card-header">
              <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                <li class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ingreso de Instalaciones</li>
              </ol>
            </div>

  <div class="card-body">
    <div class="panel-body">
      <div class="form-horizontal">

                          <legend><h6 style="font-weight: 700">INFORMACIÓN INSTALACIÓN</h6></legend><hr><br>
        <form>
                                              
                              <div class="row">

                                <div class="col-md-6"> 

                                  <div class="row form-group">
                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Ejecutivo Comercial</label></div>                             
                                    <div class="col-md-8"> 
                                      <select name="vendedor" id="vendedor" class="form-control form-control-sm" required>
                                              <option value="">SELECCIONE UNA OPCION</option>
                                           }@foreach ($vendedores as $vendedor) 
                                              <option value="{{ $vendedor->id }}">{{ $vendedor->nombres}}</option>
                                            @endforeach  
                                      </select>
                                    </div>
                                  </div>
                          
                                   <div class="row form-group"> 
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Correo 1</label></div>
                                      <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder="Ej: Example@Dominio.com"></div>
                                   </div>

                                </div>




                                  <div class="col-md-6">
                                    <div class="row form-group">                     
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Supervisor</label></div>
                                       @foreach ( $supervisores as $supervisor)
                                      <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="{{ $supervisor->id }}" placeholder="{{ $supervisor->nombres}}"></div>
                                             
                                            @endforeach
                                    </div>

                                    <div class="row form-group">
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Correo 2 </label></div>
                                      <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder="Ej: Example@Dominio.com"></div>
                                    </div>                                   
                                  </div>

                              </div>


                              <div class="row">

                                <div class="col-md-6">
                                  <div class="row form-group">
                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Documento</label></div>
                                    <div class="col-md-8">
                                      <select name="" id="" class="form-control form-control-sm">
                                        <option value="">SELECCIONE UNA OPCION</option>
                                        <option value="DNI">DNI</option>
                                        <option value="RUC">RUC</option>
                                        <option value="CE">CARNE DE EXTRANJERÍA</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row form-group">
                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Póliza</label></div>
                            <div class="col-md-8"> 
                              <select name="poliza" id="poliza" class="form-control form-control-sm">
                    <option value="">SELECCIONE UNA OPCION</option>

                      @foreach ($polizas as $poliza)
                      <option value="{{ $poliza->id }}">{{ $poliza->nombre}}</option>
                      @endforeach

                  </select>
                            </div>
                                  </div>
                                </div>
                           
                                  <div class="col-md-6">  
                                    <div class="row form-group">
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nro Documento</label></div>
                                      <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder="123456789"></div>
                                      <div class="col-md-2"><label for="exampleInputEmail1" class="secondary"><img src="../img/lupa.png" width="30 alt=""></label></div>
                                    </div>
                                  </div>

                              </div>   

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="row form-group">
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">KIT</label></div>
                                      <div class="col-md-8 "> 
                                          <select name="" id="" class="form-control form-control-sm">
                                            <option value="">SELECCIONE UNA OPCION</option>
                                            {{-- Aca se Agregan desde la Base de Dato los Kit --}}
                                          </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="row form-group"> 
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Adicionales</label></div>
                                            <div class="col-md-4">
                                              <select id="adicionales" class="form-control form-control-sm" onchange="mostrar1(this.value);">
                                                <option value="">SELECCIONE UNA OPCION</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option> 
                                              </select>
                                            </div>

                                            <div id="sel_referencia">
                                              <button type="button" class="btn btn-default" id="nuevo_adicionales" style="float: left; display: none;" 
                                              onclick="nuevo_adicionalinst($('#dni').val());">Ingresar Adicionales...</button>
                                              <div  id="nuevo_adicional1" ></div>
                                              <div class="col-sm-10" id="result_adicional" style="padding-left: 80px;padding-top: 2px;"></div>
                                              <div id="tabla_adicionales"></div>
                                              <div  id="nuevo_curso_c" style="padding-left: 80px;padding-top: 2px;"></div><br>
                                              <div class="col-sm-10" id="result_cursonuevo" style="padding-left: 80px;padding-top: 2px;"></div>
                                              <div id="tabla_equipos"></div>  <br>                                                 
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                             <br>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="row form-group">
                                            <div class="col-sm-4"><label for="exampleInputEmail1" class="secondary">Tipo</label></div>
                                            <div class="col-sm-8 "> 
                                              <select name="" id="" class="form-control form-control-sm">
                                                 <option value="">SELECCIONE UNA OPCION</option>
                                                 <option value="NUEVO">NUEVO</option>
                                                 <option value="RECUPERACION">RECUPERACIÓN</option>
                                                 <option value="RENOVACION">RENOVACIÓN</option>
                                                 <option value="RETENCION">RETENCIÓN</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
<br>


                                      <legend><h6 style="font-weight: 700">INFORMACIÓN CLIENTE</h6></legend><hr>

                                    <div class="row">
                                      <div class="col-md-6">  

                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Codigo Abonado</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                        </div>
                          
                                        <div class="row form-group"> 
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Apellidos</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="row form-group">                                   
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nombres</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder=""></div>
                                        </div>
            
                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Dirección</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder="Ej:Av Libertador calle 5 casa nro 4"></div>
                                        </div>                                       
                                      
                                      </div>
                                    </div>

                
                                    <div class="row">

                                      <div class="col-md-6">                                  
                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Departamento</label></div>
                                          <div class="col-md-8"> 
                            <select name="departamento" id="departamento" class="form-control form-control-sm" required>
                              <option value="">SELECCIONE UNA OPCION</option>
                               @foreach ($departamentos as $departamento)
                               <option value="{{ $departamento->id }}">{{ $departamento->descripcion}}</option>
                               @endforeach  
                            </select>
                          </div>
                                        </div>
                          
                                        <div class="row form-group"> 
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Distrito</label></div>
                                          <div class="col-sm-8 "> 
                                            <select name="distrito" id="distrito" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>                                                       
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="row form-group">                      
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Provincia</label></div>
                                          <div class="col-sm-8 "> 
                                            <select name="provincia" id="provincia" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>                                                     
                                            </select>
                                          </div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Teléfono/Celular</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder=""></div>
                                        </div>
                                      </div>

                                    </div>

                                    <div class="row">

                                      <div class="col-md-6">                 
                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Teléfono/Fijo</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                        </div>
                          
                                        <div class="row form-group"> 
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Contacto</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="row form-group">                                  
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Referencia</label></div>
                                          <div class="col-md-8"> 
                                            <textarea id="referencia" class="form-control" cols="2" rows="2"></textarea></div>
                                          </div>                        
                                        </div>
                                      </div>

                                      <div class="row">

                                        <div class="col-md-6">                 
                                          <div class="row form-group">
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Usuario</label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                          </div>
                          
                                          <div class="row form-group"> 
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Contacto</label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                          </div>
                                        </div>

                                        <div class="col-md-6">
                                          <div class="row form-group">                      
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nro Pivota</label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder=""></div>
                                          </div>

                                          <div class="row form-group">
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Número Contacto</label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder=""></div>
                                          </div>
                                        </div>

                                      </div>

                                      <div class="row">

                                        <div class="col-md-6">  
                                          <div class="row form-group">
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">IMEI</label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                          </div> 
                                        </div>

                                        <div class="col-md-6">
                                          <div class="row form-group">                
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Coordenadas</label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder=""></div>
                                          </div>
                                        </div>

                                     

                                      <div class="col-md-6">
                                        <div class="row form-group">                 
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Observación Interna</label></div>
                                          <div class="col-md-8"> 
                                            <textarea id="referencia" class="form-control" cols="2" rows="2"></textarea></div>
                                          </div>                  
                                        </div>
                                      </div>
                                    </div>


                                  <div class="row">
                                    <div class="col-md-2">Observaciones</div>
                                    <div class="col-md-10"> 
                                      <textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80"></textarea>
                                    </div>
                                  </div>
                                    <hr>
                                   <button type="submit" class="btn btn-success btn-sm btn-block" value="">Agendar</button>

        </form>
      </div>  
    </div>    
  </div>
</div>

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection