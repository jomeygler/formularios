
@extends('layouts.basepdf')

@section('content')

<div class="container">
<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row mt-4 mb-4  justify-content-center">
<h1>DECLARACION DE INGRESOS MENSUALES
EXENCIÓN ASEO DOMICILIARIO 2020</h1>

</div>
<div>

<div class="card-body">
<h5>IDENTIFICACIÓN DEL JEFE DE HOGAR</h5>
<div class="row">

            <div class="col-md-12 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
              <label><b>Rut</b></label>
              <p>{{$Ingreso->rut}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
              <label><b>Nombre</b></label>
              <p>{{$Ingreso->nombre}}</p>
            </div>
            
            <div class="col-md-3 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
              <label><b>Paterno</b></label>
              <p>{{$Ingreso->paterno}}</p>
            </div>            

            <div class="col-md-3 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
              <label><b>Materno</b></label>
              <p>{{$Ingreso->materno}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark" style= "border-style: solid; border-width: 1px;"> 
             <label><b>Direccion</b></label>
              <p>{{$Ingreso->direccion}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Monto</b></label>
              <p>{{$Ingreso->monto}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Origen de los fondos</b></label>
              <p>{{$Ingreso->origen_fondos}}</p>
            </div>


</div>
</div>

<div>
<p>Declaro bajo mi responsabilidad que información entregada es fidedigna. </p>
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
<h3>FIRMA</h3>
</div>


@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   
</div>

@endsection