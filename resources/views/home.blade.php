@extends('layouts.base')

@section('content')


     

<div class="container">
<style>
div.dep {
  padding:1px 1px 5px 1px; 
}
div.row{
  padding:8px
}
button{
  background-color: #ff7bac; border-radius: 45%; border: 0.5px solid #f2f2f2; color: #f2f2f2;
}
.boton{
  position: relative;
    display: inline-block;
    text-align: center;
}
.texto{
  position: absolute;
    top: 2px;
    left: 25px;
    color: white;
}
#link { color: #f2f2f2; 
}
a{
  color: #000000;
}
</style>
<div class="row justify-content-center">
  <div class="col-md-12">
  
  <span>Si su trámite no esta aquí, derígite a nuestra <b>Mesa de ayuda</b> </span>
  <div class="boton">
   <a id="link" href="mailto:mesadeayuda@villalemana.cl"><img  src="{{ asset('/images/recurso11.png')}}" alt="" width="280"> <div class="texto"> <i class="far fa-envelope-open"> </i><span> mesadeayuda@villalemana.cl</span> </a></div>
   </div>
  </div>
  </div>
  <br>
  <br>
  
  <div class= "row">
        <div class = "dep" style = "background-color: #00a8b2"  ></div>
             <div class="col-md-1 dep">
                <img img src = "{{ asset('images/recurso5.png')}}" class="justify-content-end">
             </div>             
        <div class="col-md-10 justify-content-end dep">
        <span><h5>Dirección de <b>Obras Municipales</b></h5></span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/79740_da_629_2020_sobre_plazos.pdf">D.A 468-2019 SOBRE RESIDUOS DE LA CONSTRUCCIÓN</a> 
         <span>|</span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/49603_protocolo_municipal_de_ingresos_digitales_dom_agosto_2020.pdf"> PROTOCOLO MUNICIPAL DE INGRESOS DIGITALES DOM AGOSTO 2020</a>
         <span>|</span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/44476_ddu_436_complementa_ddu_429.pdf"> DDU 436- COMPLEMENTA DDU 429</a>
         <span>|</span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/37998_ddu_429_sobre_plazos_y_procedimientos_dom.pdf"> DDU 429- SOBRE PLAZOS Y PROCEDIMIENTOS DOM</a>
         <span>|</span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/79740_da_629_2020_sobre_plazos.pdf"> D.A 629-2020 SOBRE PLAZOS</a>
         <span>|</span>
         <a href="{{ route('residuos.create') }}"> DECLARACIÓN DE RESIDUOS RESCON</a>
         <span>|</span>
         <a href="{{ route('recepcion.create') }}"> CARÁTULA DE RECEPCIÓN</a>
         <span>|</span>
         <a href="{{ route('ingresodoc.create') }}"> CARÁTULA DE INGRESO</a>
         </div>
         
  </div>

  <div class= "row">
      <div class = "dep" style = "background-color: #f8931f"></div>
        <div class="col-md-1 dep">
          <img src = "{{ asset('images/recurso4.png')}}" class="justify-content-end">
        </div>      
        <div class="col-md-10 dep">
        <span><h5>Dirección de <b>Transito</b></h5></span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/85089_tramite_permiso_de_circulacion.pdf"> TRÁMITE DE PERMISO DE CIRCULACIÓN</a> 
         <span>|</span>
         <a href="https://ligup-v2.s3.amazonaws.com/villaalemana/files/76401_tramite_licencia_de_conducir.pdf">  TRÁMITE DE LICENCIA DE CONDUCIR</a>         
        </div>
  </div>      

  <div class= "row">
     <div class = "dep" style = "background-color: #2e3192"></div>
        <div class="col-md-1 dep">
         <img src = "{{ asset('images/recurso3.png')}}" class="justify-content-end">
        </div>        
        <div class="col-10 dep">
        <span><h5>Oficina de <b>Partes</b></h5></span>
		 <a href="{{ route('partes.create') }}">FORMULARIO DE SOLICITUD</a>    
         <!--<a href="/partes/create">FORMULARIO DE SOLICITUD</a>-->                 
        </div>
  </div>
        
  <div class= "row">
     <div class = "dep" style = "background-color: #d60b51"></div>
        <div class="col-md-1 dep">
         <!--<img img src = "../images/recurso2.png" class="justify-content-end">--> 
		 <img src = "{{ asset('images/recurso2.png') }}" class="justify-content-end">
        </div>        
        <div class="col-10 dep">
        <span><h5>Dirección de <b>Rentas</b></h5></span>
		 <a href="{{ route('patentes.create') }}">SOLICITUD DE PATENTE MUNICIPAL</a> 
         <!--<a href="../patentes/create">SOLICITUD DE PATENTE MUNICIPAL</a>--> 
         <span>|</span>       
         <a href="{{ route('inversiones.create') }}">CERTIFICADO DE INVERSIONES</a> 	 
         <!--<a href="../inversiones/create">CERTIFICADO DE INVERSIONES</a>--> 
         <span>|</span>     
         <a href="{{ route('termino.create') }}"> SOLICITUD DE TÉRMINO DE NEGOCIO</a> 				 
         <!--<a href="../termino/create">SOLICITUD DE TÉRMINO DE NEGOCIO</a> -->
         <span>|</span>
         <a href="{{ route('ley.create') }}"> SOLICITUD LEY 21.207</a> 		 
         <!--<a href="../ley/create"> SOLICITUD LEY 21.207</a> -->
         <span>|</span>  
		 <a href="{{ route('sucursales.create') }}"> DECLARACIÓN DE SUCURSALES Y TRABAJADORES</a> 
         <!--<a href="../sucursales/create"> DECLARACIÓN DE SUCURSALES Y TRABAJADORES</a> -->
         <span>|</span> 
        </div>
   </div>

   <div class= "row">
     <div class = "dep" style = "background-color: #f15a24"></div>
        <div class="col-md-1 dep">
         <!--<img img src = "../images/recurso1.png" class="justify-content-end"> -->
		 <img src="{{ asset('images/recurso1.png') }}" class="justify-content-end">
        </div>        
        <div class="col-10 dep">
        <span><h5>Unidad <b>Social</b></h5></span>
		
         <a href="{{ route('ingreso.create') }}">DECLARACIÓN DE INGRESOS MENSUALES</a> 
         <span>|</span>     
         <a href="{{ route('egreso.create') }}">DECLARACIÓN DE EGRESO MENSUALES</a> 		
		 <!--
         <a href="../ingreso/create">DECLARACIÓN DE INGRESOS MENSUALES</a> 
         <span>|</span>     
         <a href="../egreso/create">DECLARACIÓN DE EGRESO MENSUALES</a> 
		 -->
        </div>
    </div>

</div>

@endsection
