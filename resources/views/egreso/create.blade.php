@extends('layouts.base')
@section('content')

<div class="row mt-4 mb-4  justify-content-center">
  <div class="col-md-10">
    <h3 class="float-left"><i class="fa fa-dollar"></i> DECLARACION DE INGRESOS MENSUALES EXENCIÓN ASEO DOMICILIARIO 2020 </h3>
  </div>
</div>


<form class="form-horizontal" action="{{ route('egreso.store') }}" method="POST" enctype="multipart/form-data">
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
         <h5>IDENTIFICACIÓN DEL JEFE DE HOGAR</h5>
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
              <label>Nombre</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="nombre"  name="nombre" maxlength="200"  value="{{ old('nombre') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Paterno</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="paterno"  name="paterno" maxlength="200"  value="{{ old('paterno') }}" >
              </div>
            </div>		

            <div class="col-md-12">
              <label>Materno</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="materno"  name="materno" maxlength="200"  value="{{ old('materno') }}" >
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
              <label>Ocupacion</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="text" class="form-control" id="ocupacion"  name="ocupacion" maxlength="200"  value="{{ old('ocupacion') }}" >
              </div>
            </div>	
                    

         </div>
         </div>
         <div class="card-body">
         <h5>COMPLETAR SEGÚN CORRESPONDA</h5>
         <div class="row">
         
            <div class="col-md-12">
              <label>Alimentación</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="alimentacion"  name="alimentacion" maxlength="200"  value="{{ old('alimentacion') }}" >
              </div>
            </div>   
         

           <div class="col-md-12">
              <label>Salud (medicamento)</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="salud"  name="salud" maxlength="200"  value="{{ old('salud') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Arriendo</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="ariendo"  name="arriendo" maxlength="200"  value="{{ old('arriendo') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Luz</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="luz"  name="luz" maxlength="200"  value="{{ old('luz') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Agua</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="agua"  name="agua" maxlength="200"  value="{{ old('agua') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Gas</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="gas"  name="gas" maxlength="200"  value="{{ old('gas') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Telefono</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="gastotelefono"  name="gastotelefono" maxlength="200"  value="{{ old('gastotelefono') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Movilizacion</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="movilizacion"  name="movilizacion" maxlength="200"  value="{{ old('movilizacion') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Educación</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="educacion"  name="educacion" maxlength="200"  value="{{ old('educacion') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Dividendo</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="dividendo"  name="dividendo" maxlength="200"  value="{{ old('dividendo') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Creditos</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="creditos"  name="creditos" maxlength="200"  value="{{ old('creditos') }}" >
              </div>
            </div>

            <div class="col-md-12">
              <label>Varios</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                </div>
                <input type="number" class="form-control" id="varios"  name="varios" maxlength="200"  value="{{ old('varios') }}" >
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