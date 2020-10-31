@extends('layouts.base')
@section('content')

<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-10">
    <h3 class="float-left"><i class="far fa-handshake"></i> DECLARACIÓN DE SUCURSALES Y N° DE TRABAJADORES </h3>
  </div>
</div>


<form class="form-horizontal" action="{{ route('sucursales.store') }}" method="POST" enctype="multipart/form-data">
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
         <h5>A) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
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
              <label>Razon Social</label>
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
              <label>Giro</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="giro"  name="giro" maxlength="200"  value="{{ old('giro') }}" >
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
              <label>Email</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="email"  name="email" maxlength="200"  value="{{ old('email') }}" >
              </div>
            </div>	

            <div class="col-md-12">
              <label>Representante Legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="representante"  name="representante" maxlength="200"  value="{{ old('representeante') }}" >
              </div>
            </div>	

            <div class="col-md-12">
              <label>RUT Representante Legal</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rutrepresentante"  name="rutrepresentante" maxlength="200"  value="{{ old('rutrepresenteante') }}" required oninput="checkRut(this)" >
              </div>
            </div>	


         </div>
         </div>

       <div class="card-body">
        <h5>B) DETALLE CASA MATRIZ Y SUCURSALES Y N° DE TRABAJADORES</h5>
        <div class="row">
         
            <div class="col-md-6">
              <label>Comuna</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="comuna1"  name="comuna1" maxlength="200"  value="{{ old('comuna1') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <label>Rol</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol1"  name="rol1" maxlength="200"  value="{{ old('rol1') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <label>trabajadores</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="trabajadores1"  name="trabajadores1" maxlength="200"  value="{{ old('trabajadores1') }}" >
              </div>
            </div>	


            <div class="col-md-6">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="comuna2"  name="comuna2" maxlength="200"  value="{{ old('comuna2') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol2"  name="rol2" maxlength="200"  value="{{ old('rol2') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="trabajadores2"  name="trabajadores2" maxlength="200"  value="{{ old('trabajadores2') }}" >
              </div>
            </div>	

            <div class="col-md-6">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="comuna3"  name="comuna3" maxlength="200"  value="{{ old('comuna3') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol3"  name="rol3" maxlength="200"  value="{{ old('rol3') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="trabajadores3"  name="trabajadores3" maxlength="200"  value="{{ old('trabajadores3') }}" >
              </div>
            </div>	

            <div class="col-md-6">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="comuna4"  name="comuna4" maxlength="200"  value="{{ old('comuna4') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol4"  name="rol4" maxlength="200"  value="{{ old('rol4') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="trabajadores4"  name="trabajadores4" maxlength="200"  value="{{ old('trabajadores4') }}" >
              </div>
            </div>	

            <div class="col-md-6">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="comuna5"  name="comuna5" maxlength="200"  value="{{ old('comuna5') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="rol5"  name="rol5" maxlength="200"  value="{{ old('rol5') }}" >
              </div>
            </div>	

            <div class="col-md-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="trabajadores5"  name="trabajadores5" maxlength="200"  value="{{ old('trabajadores5') }}" >
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