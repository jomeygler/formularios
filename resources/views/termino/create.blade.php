@extends('layouts.base')
@section('content')

<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-10">
    <h3 class="float-left"><i class="fas fa-ban"></i> SOLICITUD TÉRMINO DE NEGOCIO </h3>
  </div>
</div>


<form class="form-horizontal" action="{{ route('termino.store') }}" method="POST" enctype="multipart/form-data">
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

          
   
   </div>
 
         <div class="card-body">
         <h5>I) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
         <div class="row">

            <div class="col-md-12">
              <label>R.U.T. (Razón Social)</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rut"  name="rut" maxlength="200"  value="{{ old('rut') }} " required oninput="checkRut(this)" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Razón Social</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="nombre"  name="nombre" maxlength="200"  value="{{ old('nombre') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Rol Patente</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol"  name="rol" maxlength="200"  value="{{ old('rol') }}" >
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
              <label>Telefono Particular</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="telefono"  name="telefono" maxlength="200"  value="{{ old('telefono') }}" >
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
              <label>Razones por las cuales solicita el término de negocio:</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="razones"  name="razones" maxlength="200"  value="{{ old('razones') }}" >
              </div>
            </div>	
       
         </div>
         </div>
       
         <div class="card-body">
         <h5>II) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL</h5>
         <div class="row">
       
         <div class="col-md-12">
              <label>Rut</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rutrepresentante"  name="rutrepresentante" maxlength="200"  value="{{ old('rutrepresentante') }} " required oninput="checkRut(this)" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Nombre representante legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="representante"  name="representante" maxlength="200"  value="{{ old('representante') }}" >
              </div>
            </div>		
            
            <div class="col-md-12">
              <label>Domicilio</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rep_direcion"  name="rep_direcion" maxlength="200"  value="{{ old('rep_direcion') }}" >
              </div>            
            </div>

            <div class="col-md-12">
              <label>Telefono Particular</label>
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