
@extends('layouts.basepdf')

@section('content')

<div class="container">
<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row mt-4 mb-4" style="text-align: center;">
<h1 style="color:blue">SOLICITUD TÉRMINO DE NEGOCIO</h1>
<span><b>Con esta fecha, la empresa que se individualiza viene a solicitar a la Municipalidad de Villa
Alemana término de negocio, en base a los siguientes antecedentes:</b></span>
<br>
</div>
<div>
<br>
<div class="card-body">
<h5>I) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
<div class="row">

           <div class="col-md-12 rounded border border-dark" style= "border-style: groove;">
             <label><b>Razón Social</b></label>
              <p>{{$Termino->nombre}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark" style= "border-style: groove;">
             <label><b>R.U.T. (Razón Social)</b></label>
              <p>{{$Termino->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark" style= "border-style: groove;">
             <label><b>Rol Patente</b></label>
              <p>{{$Termino->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: groove;">
             <label><b>Domicilio</b></label>
              <p>{{$Termino->direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: groove;">
             <label><b>telefono  Particular</b></label>
              <p>{{$Termino->telefono}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: groove;">
             <label><b>Celular</b></label>
              <p>{{$Termino->celular}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark" style= "border-style: groove;">
             <label><b>email</b></label>
              <p>{{$Termino->email}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark" style= "border-style: groove;">
             <label><b>Razones por las cuales solicitael término de negocio</b></label>
              <p>{{$Termino->razones}}</p>
            </div>
<br>                    

            </div>
            </div>

</div>
</div>

<div class="card-body">
<h5>II) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL</h5>
<div class="row">


            <div class="col-md-12 rounded border border-dark" style= "border-style: groove; ">
             <label><b>Nombre representante legal</b></label>
              <p>{{$Termino->representante}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark" style= "border-style: groove; ">
             <label><b>Rut</b></label>
              <p>{{$Termino->rutrepresentante}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark" style= "border-style: groove;">
             <label><b>Telefono  Particular </b></label>
              <p>{{$Termino->rep_telefono}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: groove;">
             <label><b>Celular</b></label>
              <p>{{$Termino->rep_celular}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: groove;">
             <label><b>Domicilio</b></label>
              <p>{{$Termino->rep_direcion}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: groove;">
             <label><b>Email</b></label>
              <p>{{$Termino->rep_email}}</p>
            </div>


</div>
</div>

<div>
<br>
<p>REQUISITOS:</p>
<p>Con esta fecha, la empresa que se individualiza viene a solicitar a la Municipalidad de Villa
Alemana término de negocio, en base a los siguientes antecedentes:</p>
<p>a) Debe acompañar última patente cancelada correspondiente a la fecha de término de la
actividad.</p>
<p>b) Aviso de término de giro o cierre de sucursal y/o declaraciones sin movimiento ante el
Servicio de Impuestos Internos.</p>
<p>c) Esta solicitud solo puede ser gestionada por el titular o en su defecto el representante
legal. Para solicitudes de terceros, debe acompañar una autorización notarial del titular de la
patente o en su defecto el representante legal.</p>
<p>d) Adjuntar copia de cedula de identidad.</p>
</div>
<div style="text-align: center; height: 34px;
        padding: 13px 0 30px;
        position: fixed;
        width: 90%;
        z-index: 5000;
        bottom: 0;">
<br>
<br>
<br>
<p>___________________________________________________________</p>
<p>Nombre, firma y Rut del contribuyente o Representante Legal</p>
</div>

@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   
</div>

@endsection