
@extends('layouts.baseform')


@section('content')

<div class="row mt-4 mb-4  justify-content-center">
<h1>CARÁTULA DE INGRESO DE DOCUMENTOS</h1>
</div>

<div class="card-body">
<h5>1.- Caratula</h5>
<div class="row">
         <div class="col-md-7 rounded border border-dark">
             <label><b>Permiso</b></label>
              <p>{{$IngresoDoc->permiso}}</p>
            </div>
            
            <div class="col-md-8 rounded border border-dark">
             <label><b>Rol</b></label>
              <p>{{$IngresoDoc->rol}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Proyecto</b></label>
              <p>{{$IngresoDoc->proyecto}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Ubicacion</b></label>
              <p>{{$IngresoDoc->ubicacion}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Propietario</b></label>
              <p>{{$IngresoDoc->propietario}}</p>
            </div>


            <div class="col-md-8 rounded border border-dark">
             <label><b>Arquitecto</b></label>
              <p>{{$IngresoDoc->arquitecto}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Revisor</b></label>
              <p>{{$IngresoDoc->revisor}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>Fecha</b></label>
              <p>{{$IngresoDoc->fecha}}</p>
            </div>

            
            <div class="col-md-7 rounded border border-dark">
             <label><b>Expediente</b></label>
              <p>{{$IngresoDoc->expediente}}</p>
            </div>

            
            <div class="card-body">
            <h5>2.- DESCRIPCIÓN BREVE PROYECTO</h5>
            <div class="row">
            

            <div class="col-md-12 rounded border border-dark">
             <label><b>Descrición</b></label>
              <p>{{$IngresoDoc->descrip}}</p>
            </div>

            </div>
            </div>
            
            <div class="card-body">
            <h5>2.- DESCRIPCIÓN BREVE PROYECTO</h5>
            <div class="row">
            

            <div class="col-md-12 rounded border border-dark">
             <label><b>Declaracion</b></label>
              <p>{{$IngresoDoc->declaracion}}</p>
            </div>

            </div>
            </div>

</div>
</div>




@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif

<a href="/" class = "btn btn-prymary">Volver</a>
<a href="{{ route('ingresodoc.pdf', $IngresoDoc->id) }}" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>


@endsection