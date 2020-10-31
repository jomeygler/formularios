@extends('layouts.base')
@section('content')

<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-10">
    <h3 class="float-left"><i class="	fas fa-car"></i> Partes </h3>
  </div>
</div>


<form class="form-horizontal" action="{{ route('patentes.store') }}" method="POST" enctype="multipart/form-data">
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
              <label>Fecha de Ingreso</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="far fa-calendar"></i></div>
                </div>
                <input type="date" class="form-control control-date" id="fecha"  name="fecha"   value="{{ old('fecha') }}" >
              </div>
            </div>        
   
   </div>
 
       <div class="card-body">
       <h5>B) TRÁMITE QUE REALIZARÁ</h5>
       <div class="row">

            <div class="col-md-12">
              <label>Tipo de Tramite</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <select class="form-control" id="tramite" name="tramite">
                @foreach($Tramite as $registro)
                    <option value="{{ $registro->id }}">{{ $registro->nombre }}</option>
                @endforeach
                </select>
              </div>
            </div>
        </div>
        </div>

        <div class="card-body">
         <h5>C) PARA LOS TRÁMITES SIGUIENTES INDICAR ROL DE PATENTE</h5>
        <div class="row">
        
        <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol1" value="1" id="1">
          <label class="form-check-label" for="rol1">
         <b> Traslado de Patente </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol2" value="1" id="1">
          <label class="form-check-label" for="rol2">
         <b> Apertura de Sucursal con Casa Matriz en Villa Alemana </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol2" value="1" id="1">
          <label class="form-check-label" for="rol2">
         <b> Cambio de Razón Social </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol3" value="1" id="1">
          <label class="form-check-label" for="rol3">
         <b> Transferencia de Patente </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol4" value="1" id="1">
          <label class="form-check-label" for="rol4">
         <b> Ampliación de Giro </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol5" value="1" id="1">
          <label class="form-check-label" for="rol5">
         <b> Cambio de Giro </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol6" value="1" id="1">
          <label class="form-check-label" for="rol6">
         <b> Traslado de Patente </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol7" value="1" id="1">
          <label class="form-check-label" for="rol7">
         <b> Transmisión de Patente </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol8" value="1" id="1">
          <label class="form-check-label" for="rol8">
         <b> Factibilidad</b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name = "rol9" value="1" id="1">
          <label class="form-check-label" for="rol9">
         <b> Otros </b>
          </label>
          </div>
          </div>

          </div>
          </div>

        <div class="card-body">
        <h5>D) INDIVIDUALIZACIÓN DEL SOLICITANTE</h5>
        <div class="row">
        
         <div class="col-md-12">
              <label>Rut</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rut"  name="rut" maxlength="200"  value="{{ old('rut') }} " required oninput="checkRut(this)" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Nombres</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="nombre"  name="nombre" maxlength="200"  value="{{ old('nombre') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Dirección</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="direccion"  name="direccion" maxlength="200"  value="{{ old('direccion') }}" >
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
        <h5>E) DATOS DEL LOCAL COMERCIAL PARA: PATENTE NUEVA, APERTURA SUCURSAL O TRASLADOS</h5>
        <div class="row">

        <div class="col-md-12">
              <label>Giro</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control" id="giro"  name="giro"   value="{{ old('giro') }}" ></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <label>Capital</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control" id="capital"  name="capital"   value="{{ old('capital') }}" ></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <label>Avaluo</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control" id="avaluo"  name="avaluo"   value="{{ old('avaluo') }}" ></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <label>Rol SII</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rolsii"  name="rolsii" maxlength="200"  value="{{ old('rolsii') }}" >
              </div>
            </div>             


        </div>
        </div>

        <div class="card-body">
        <h5>F) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL (Art. 12, del reglamento ley 3.063 de rentas
              municipales)</h5>
        <div class="row">
        
         <div class="col-md-12">
              <label>Rut</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_rut"  name="rep_rut" maxlength="200"  value="{{ old('rep_rut') }} " required oninput="checkRut(this)" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Nombres</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_nombre"  name="rep_nombre" maxlength="200"  value="{{ old('rep_nombre') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Dirección</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_direccion"  name="rep_direccion" maxlength="200"  value="{{ old('rep_direccion') }}" >
              </div>            
            </div>                   
        
            <div class="col-md-12">
              <label>Telefono</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_telefono"  name="rep_telefono" maxlength="200"  value="{{ old('rep_telefono') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Celular</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_celular"  name="rep_celular" maxlength="200"  value="{{ old('rep_celular') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Email</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_email"  name="rep_email" maxlength="200"  value="{{ old('rep_email') }}" >
              </div>
            </div>             

         </div>
         </div>

         <div class="card-body">
         <h5>G) PROPAGANDA</h5>
         <div class="row">

         <div class="col-md-12">
         <div class="form-check">
           <input class="form-check-input" type="checkbox" name = "propaganda" value="1" id="1">
           <label class="form-check-label" for="propaganda">
           <b> Propaganda </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "luminoso_aviso" value="1" id="1">
            <label class="form-check-label" for="luminoso_aviso">
           <b> Aviso iluminado  </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "noluminoso_aviso" value="1" id="1">
            <label class="form-check-label" for="noluminoso_aviso">
           <b> Aviso no iluminado  </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name = "neon_aviso" value="1" id="1">
            <label class="form-check-label" for="neon_aviso">
           <b> Aviso con neón   </b>
          </label>
          </div>
          </div>

          <div class="col-md-12">
              <label>Ubicacion</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <textarea type="text" class="form-control control-text" id="ubicacion"  name="ubicacion"   value="{{ old('ubicacion') }}" ></textarea>
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