
@extends('layouts.basepdf')

@section('content')

<div class="container">
<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row mt-4 mb-4  justify-content-center">
<h1>DECLARACIÓN DE SUCURSALES Y N° DE TRABAJADORES</h1>
</div>
<div>

<div class="card-body">
<h5>A) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
<div class="row">

           <div class="col-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Razon Social</b></label>
              <p>{{$Sucursale->nombre}}</p>
            </div>
            
            <div class="col-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut</b></label>
              <p>{{$Sucursale->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rol Patente</b></label>
              <p>{{$Sucursale->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Giro</b></label>
              <p>{{$Sucursale->giro}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Direccion</b></label>
              <p>{{$Sucursale->direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Telefono</b></label>
              <p>{{$Sucursale->Rep_telefono}}</p>
            </div>
            
            <div class="col-md-7 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>email</b></label>
              <p>{{$Sucursale->email}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Representante</b></label>
              <p>{{$Sucursale->email}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut Representante</b></label>
              <p>{{$Sucursale->rutrepresentante}}</p>
            </div>


            </div>
            </div>


<div class="card-body">
<h5>II) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL</h5>
<div class="row">


           


</div>
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