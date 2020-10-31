
@extends('layouts.basepdf')

@section('content')

<div class="container">
<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row mt-4 mb-4  justify-content-center">
<h1>SOLICITUD TÉRMINO DE NEGOCIO</h1>
<span><b>Con esta fecha, la empresa que se individualiza viene a solicitar a la Municipalidad de Villa
Alemana término de negocio, en base a los siguientes antecedentes:</b></span>
</div>
<div>

<div class="card-body">
<h5>I) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
<div class="row">

           <div class="col-md-12 rounded border border-dark" style= "border-style: solid;">
             <label><b>Nombre</b></label>
              <p>{{$Termino->nombre}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark" style= "border-style: solid;">
             <label><b>Rut</b></label>
              <p>{{$Termino->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid;">
             <label><b>Rol Patente</b></label>
              <p>{{$Termino->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid;">
             <label><b>Direccion</b></label>
              <p>{{$Termino->direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: solid;">
             <label><b>telefono</b></label>
              <p>{{$Termino->telefono}}</p>
            </div>
            
            <div class="col-md-7 rounded border border-dark" style= "border-style: solid;">
             <label><b>email</b></label>
              <p>{{$Termino->email}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark" style= "border-style: solid;">
             <label><b>Monto de Inversion</b></label>
              <p>{{$Termino->montoinv}}</p>
            </div>
                        

            </div>
            </div>

</div>
</div>

<div class="card-body">
<h5>II) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL</h5>
<div class="row">


            <div class="col-md-12 rounded border border-dark" style= "border-style: dashed;">
             <label><b>Nombre</b></label>
              <p>{{$Termino->nombre}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut</b></label>
              <p>{{$Termino->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid;">
             <label><b>Rol Patente</b></label>
              <p>{{$Termino->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid;">
             <label><b>Rol</b></label>
              <p>{{$Termino->direccion}}</p>
            </div>


</div>
</div>


@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   
</div>

@endsection