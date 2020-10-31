@extends('layouts.base')
@section('content')

<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-10">
    <h3 class="float-left"><i class="fas fa-snowplow"></i> Declaración de Residuos</h3>
  </div>
</div>


<form class="form-horizontal" action="{{ route('residuos.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-8">
      
      @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <div class="card">
    
    <div clas="row">
    <div class="col-md-12">
              <label>Tipo</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <select class="form-control" id="tipo" name="tipo">
                @foreach($TipoResiduo as $registro)
                    <option value="{{ $registro->id }}">{{ $registro->nombre }}</option>
                @endforeach
                </select>
              </div>
            </div>

          <div class="col-md-12">
              <label>Fecha</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="far fa-calendar"></i></div>
                </div>
                <input type="date" class="form-control control-date" id="fecha"  name="fecha"   value="{{ old('fecha') }}" >
              </div>
            </div>        
   
   </div>
 
         <div class="card-body">
         <h5>1.- DIRECCIÓN DE LA PROPIEDAD</h5>
         <div class="row">

         <div class="col-md-12">
              <label>Calle</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="calle"  name="calle" maxlength="200"  value="{{ old('calle') }}" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Numero</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="numero"  name="numero" maxlength="200"  value="{{ old('numero') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Rol SII</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol"  name="rol" maxlength="200"  value="{{ old('rol') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Manzana</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="manzana"  name="manzana" maxlength="200"  value="{{ old('manzana') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Lote</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="lote"  name="lote" maxlength="200"  value="{{ old('lote') }}" >
              </div>
            </div>		
                    
            <div class="col-md-12">
              <label>Localidad</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="localidad"  name="localidad" maxlength="200"  value="{{ old('localidad') }}" >
              </div>
            </div>		
          
            <div class="col-md-12">
              <label>Planos</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="plano_lote"  name="plano_lote" maxlength="200"  value="{{ old('plano_lote') }}" >
              </div>
            </div>		
                                
         </div>
         </div>
       
         <div class="card-body">
         <h5>2.- DATOS DEL PROPIETARIO</h5>
         <div class="row">

         <div class="col-md-12">
              <label>Razon Social</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="empresa"  name="empresa" maxlength="200"  value="{{ old('empresa') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Rut</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control control-rut" id="rut"  name="rut" maxlength="200"  value="{{ old('rut') }}"  required oninput="checkRut(this)" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Representante Legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="representante"  name="representante" maxlength="200"  value="{{ old('representante') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Rut Representante Legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control control-rut" id="rutrepresentante"  name="rutrepresentante" maxlength="200"  value="{{ old('rutrepresentante') }}"  required oninput="checkRut(this)" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Direccion</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="direccion"  name="direccion" maxlength="200"  value="{{ old('direccion') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Comuna</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="comuna"  name="comuna" maxlength="200"  value="{{ old('comuna') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Telefono</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="telefono"  name="telefono" maxlength="200"  value="{{ old('telefono') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Celular</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="celular"  name="celular" maxlength="200"  value="{{ old('celular') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Email</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="email"  name="email" maxlength="200"  value="{{ old('email') }}" >
              </div>
            </div>

         </div>
         </div>

         <div class="card-body">
         <h5>3.- PROFESIONAL RESPONSABLE OBRA</h5>
         <div class="row">

         <div class="col-md-12">
              <label>Razon Social</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_empresa"  name="pro_empresa" maxlength="200"  value="{{ old('pro_empresa') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Rut</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control control-rut" id="pro_rut"  name="pro_rut" maxlength="200"  value="{{ old('pro_rut') }}"  required oninput="checkRut(this)" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Representante Legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_representante"  name="pro_representante" maxlength="200"  value="{{ old('pro_representante') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Rut Representante Legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control control-rut" id="pro_rutrepresentante"  name="pro_rutrepresentante" maxlength="200"  value="{{ old('pro_rutrepresentante') }}"  required oninput="checkRut(this)" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Direccion</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_direccion"  name="pro_direccion" maxlength="200"  value="{{ old('pro_direccion') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Comuna</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_comuna"  name="pro_comuna" maxlength="200"  value="{{ old('pro_comuna') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Telefono</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control control-text" id="pro_telefono"  name="pro_telefono" maxlength="200"  value="{{ old('pro_telefono') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Celular</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_celular"  name="pro_celular" maxlength="200"  value="{{ old('pro_celular') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Email</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_email"  name="pro_email" maxlength="200"  value="{{ old('pro_email') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Patente Proveedor</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="pro_patente"  name="pro_patente" maxlength="200"  value="{{ old('pro_patente') }}" >
              </div>
            </div>


         </div>
         </div>


         <div class="card-body">
         <h5>4.- DISPOSICIÓN FINAL DE LOS RESIDUOS</h5>
         <div class="row">

         <div class="col-md-12">
              <label>Calle</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="res_calle"  name="res_calle" maxlength="200"  value="{{ old('res_calle') }}" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Numero</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="res_numero"  name="res_numero" maxlength="200"  value="{{ old('res_numero') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Rol SII</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="res_rol"  name="res_rol" maxlength="200"  value="{{ old('res_rol') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Manzana</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="res_manzana"  name="res_manzana" maxlength="200"  value="{{ old('res_manzana') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Lote</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="res_lote"  name="res_lote" maxlength="200"  value="{{ old('res_lote') }}" >
              </div>
            </div>		
                    
            <div class="col-md-12">
              <label>Localidad</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="res_localidad"  name="res_localidad" maxlength="200"  value="{{ old('res_localidad') }}" >
              </div>
            </div>		
          
            <div class="col-md-12">
              <label>Planos</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="res_sanitaria"  name="res_sanitaria" maxlength="200"  value="{{ old('res_sanitaria') }}" >
              </div>
            </div>		
                                
         </div>
         </div>

         <div class="card-body">
          <h5>5.- COMPOSICIÓN DE RESIDUOS A GENERAR</h5>
          <div class="row">

          <div class="col-md-12">
              <label>Detalles</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control control-text" id="res_detalle"  name="res_detalle"  value="{{ old('res_detalle') }}" ></textarea>
              </div>
            </div>

         </div>
         </div>

         <div class="card-body">
         <h5>6.- CANTIDAD DE RESIDUOS A GENERAR</h5>
         <div class="row">

         <div class="col-md-8">
             <label>Material</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="material1"  name="material1" maxlength="200"  value="{{ old('material1') }}" >
              </div>
            </div>


            <div class="col-md-4">
             <label>Cantidad</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="cantidad1"  name="cantidad1" maxlength="200"  value="{{ old('cantidad1') }}" >
              </div>
            </div>


            <div class="col-md-8">
             <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="material2"  name="material2" maxlength="200"  value="{{ old('material2') }}" >
              </div>
            </div>


            <div class="col-md-4">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="cantidad2"  name="cantidad2" maxlength="200"  value="{{ old('cantidad2') }}" >
              </div>
            </div>

            <div class="col-md-8">
             <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="material3"  name="material3" maxlength="200"  value="{{ old('material3') }}" >
              </div>
            </div>


            <div class="col-md-4">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="cantidad3"  name="cantidad3" maxlength="200"  value="{{ old('cantidad3') }}" >
              </div>
            </div>

            <div class="col-md-8">
             <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="material4"  name="material4" maxlength="200"  value="{{ old('material4') }}" >
              </div>
            </div>


            <div class="col-md-4">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="cantidad4"  name="cantidad4" maxlength="200"  value="{{ old('cantidad4') }}" >
             </div>
            </div>

            <div class="col-md-8">
             <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="material5"  name="material5" maxlength="200"  value="{{ old('material5') }}" >
              </div>
            </div>


            <div class="col-md-4">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="cantidad5"  name="cantidad5" maxlength="200"  value="{{ old('cantidad5') }}" >
              </div>
            </div>


         </div>
         </div>

         <div class="card-body">
        <h5>7.- DESCRIPCIÓN DEL PROCESO DE ACOPIO Y RETIRO DE RESIDUOS</h5>
        <div class="row">

        <div class="col-md-12">
              <label>Tiempo de acopio en el predio, medios a emplear en el retiro, la ruta del traslado y la indicación del
transportista que lo realizará y lugar de destino</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control control-text" id="notas"  name="notas" maxlength="200"  value="{{ old('notas') }}" ></textarea>
              </div>
            </div>
        
            <div class="col-md-12">
              <label>Descripcion del Proceso</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control control-text" id="descrip_proc"  name="descrip_proc"  value="{{ old('descrip_proc') }}" ></textarea>
              </div>
            </div>
        
            <div class="col-md-12">
              <label>Antecedentes</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control control-text" id="antecedentes"  name="antecedentes"   value="{{ old('antecedentes') }}" ></textarea>
              </div>
            </div>

        </div>
         </div>

        <div class="card-body">
        <div class="row">
            <div class="col-md-12 mt-2">
              <button type="submit" class="btn btn-success"  onClick="validateFm();"><i class="fas fa-save"></i> Ingresar</button>
            </div>	 
          </div>		
        </div>

    </div>
  </div>
</div>
</form>
      

      
<script>
  $(".control-rut").bind('keypress', function(event) {
	  var regex = new RegExp("^[0-9 Kk]+$");
	  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	  if (!regex.test(key)) {
		event.preventDefault();
		return false;
	  }
  });	
  
  $(".control-text").bind('keypress', function(event) {
	  var regex = new RegExp("^[a-zA-Z ñÑ]+$");
	  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	  if (!regex.test(key)) {
		event.preventDefault();
		return false;
	  }
	});	   
  
  $(".control-number").bind('keypress', function(event) {
	  var regex = new RegExp("^[0-9]+$");
	  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	  if (!regex.test(key)) {
		event.preventDefault();
		return false;
	  }
	});	  


function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}



</script>
  </div>
@endsection