
@extends('layouts.menuItems')

@section('content')
<br>
<div class="card">
  <div class="card-header">
  

<ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
<li class="breadcrumb-item" style="color: rgb(112, 4, 158);">Evaluación Técnica</a></li>
 <li class="breadcrumb-item active" aria-current="page">Registro</li>
</ol>


</div>
<div class="card-body">
    
<form>
<h6>Información General</h6><hr>
<div class="row">
<div class="col-md-4">

<div class="form-group">
<label for="exampleInputDNI">DNI</label>
<input type="text" class="form-control " id="nombre1" name="id" placeholder="Ej: 000000">
</div>

<div class="form-group">
<label for="exampleInputdireccioncliete">Dirección Cliente</label>
<input type="text" class="form-control " id="apellido1" placeholder="Ej: Calle 1/urbanizacion">
</div>

</div>


<div class="col-md-4">

<div class="form-group">
<label for="exampleInputnombrecliete">Nombre Cliente</label>
<input type="text" class="form-control " id="nombrecliente" name="id" placeholder="Ej: Jose">
</div>

<div class="form-group">
<label for="exampleInputTelefonoCliente">Telefono Cliente</label>
<input type="text" class="form-control " id="TelefonoCliente" placeholder="Ej:900544000">
</div>

</div>
</div>

<br>

<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="v_direccion">Vendedor</label>
<select id="vendedor" class="form-control">
<option value="">SELECCIONE UNA OPCIÓN BD</option>
{{-- SELECIONAR DESDE LA BASE DE DATO --}}
</select>

</div>


<div class="form-group">
<label for="v_direccion">Departamento</label>
<select id="vendedor" class="form-control">
<option value="">SELECCIONE UNA OPCIÓN BD</option>
{{-- SELECIONAR DESDE LA BASE DE DATO --}}
</select></div>

</div>


<div class="col-md-4">
<div class="form-group">
<label for="exampleInputnombrecliete">Email Vendedor</label>
<input type="text" class="form-control " id="nombrecliente" name="id" placeholder="Ej: Example@dominio.com">
</div>

<div class="form-group">
<label for="v_direccion">Distrito</label>
<select id="vendedor" class="form-control">
<option value="">SELECCIONE UNA OPCIÓN BD</option>
{{-- SELECIONAR DESDE LA BASE DE DATO --}}
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4">

<div class="form-group">
<label for="v_direccion">Provincia</label>
<select id="vendedor" class="form-control">
<option value="">SELECCIONE UNA OPCIÓN BD</option>
{{-- SELECIONAR DESDE LA BASE DE DATO --}}
</select>
</div>
</div>


<div class="form-group">
<label for="tipo_poliza">Tipo Poliza</label>
<select id="vendedor" class="form-control">
<option value="">SELECCIONE UNA OPCIÓN BD</option>
{{-- SELECIONAR DESDE LA BASE DE DATO --}}
</select>
</div>







</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="exampleInputEmail1">Coordenas</label>
<input type="text" class="form-control " id="id" name="id" placeholder="">
</div>
</div>
</div>
  
  
</div>


<DIV class="form-group">
<div id="cual2" >
<label for="editor1" class="col-sm-2 control-label">Observaciones</label>

<div class="col-sm-6">                    
<div class="container">
<div class="row">
<div class="col-md-16 col-md-offset-1">
 <div class="panel panel-default">

<div class="panel-body">
<form>
                            	
<textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80"></textarea>

</form>
</div>
</div>
</div>
</div>
</div>

<br>
  <button type="submit" class="btn btn-success btn-sm" value="Guardar">Registrar Vicita Técnica</button>
</form>

  </div>
</div>
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>








</form>

  </div>
</div>




@endsection