@extends('layouts.base')
@section('content')

<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-10">
    <h3 class="float-left"><i class="fas fa-snowplow"></i> Caratula Recepcion </h3>
  </div>
</div>


<form class="form-horizontal" action="{{ route('recepcion.store') }}" method="POST" enctype="multipart/form-data">
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
         <div class="row">

         <div class="col-md-12">
              <label>Permiso</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="permiso"  name="permiso" maxlength="200"  value="{{ old('permiso') }}" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Proyecto</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="proyecto"  name="proyecto" maxlength="200"  value="{{ old('proyecto') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Rol</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol"  name="rol" maxlength="200"  value="{{ old('rol') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Ubicacion</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="ubicacion"  name="ubicacion" maxlength="200"  value="{{ old('ubicacion') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Propietario</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="propietario"  name="propietario" maxlength="200"  value="{{ old('propietario') }}" >
              </div>            
            </div>		
                    
            <div class="col-md-12">
              <label>Arquitecto</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="arquitecto"  name="arquitecto" maxlength="200"  value="{{ old('arquitecto') }}" >
              </div>
            </div>		
          
            <div class="col-md-12">
              <label>Revisor</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="revisor"  name="revisor" maxlength="200"  value="{{ old('revisor') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Expediente</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="expediente"  name="expediente" maxlength="200"  value="{{ old('expediente') }}" >
              </div>
            </div>	

               <div class="col-md-12">
              <label>Descripcion de Proyecto</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control" id="descrip"  name="descrip" maxlength="200"  value="{{ old('descrip') }}" ></textarea>
              </div>           
              </div>

                   <div class="col-md-12">
              <label>Declaración de Proyecto</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control" id="declaracion"  name="declaracion" maxlength="200"  value="{{ old('declaracion') }}" ></textarea>
      

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