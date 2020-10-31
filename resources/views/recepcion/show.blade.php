
@extends('layouts.baseform')


@section('content')

<div class="row mt-4 mb-4  justify-content-center">
<h1>CARATULA DE RECEPCIÓN</h1>
</div>

<div class="card-body">
<h5>1.- Caratula</h5>
<div class="row">
         <div class="col-md-7 rounded border border-dark">
             <label><b>Permiso</b></label>
              <p>{{$Recepcion->permiso}}</p>
            </div>
            
            <div class="col-md-8 rounded border border-dark">
             <label><b>Rol</b></label>
              <p>{{$Recepcion->rol}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Proyecto</b></label>
              <p>{{$Recepcion->proyecto}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Ubicacion</b></label>
              <p>{{$Recepcion->ubicacion}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Propietario</b></label>
              <p>{{$Recepcion->propietario}}</p>
            </div>


            <div class="col-md-8 rounded border border-dark">
             <label><b>Arquitecto</b></label>
              <p>{{$Recepcion->arquitecto}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Revisor</b></label>
              <p>{{$Recepcion->revisor}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>Fecha</b></label>
              <p>{{$Recepcion->fecha}}</p>
            </div>

            
            <div class="col-md-7 rounded border border-dark">
             <label><b>Expediente</b></label>
              <p>{{$Recepcion->expediente}}</p>
            </div>

            
            <div class="card-body">
            <h5>2.- DESCRIPCIÓN BREVE PROYECTO</h5>
            <div class="row">
            

            <div class="col-md-12 rounded border border-dark">
             <label><b>Descrición</b></label>
              <p>{{$Recepcion->descrip}}</p>
            </div>

            </div>
            </div>
            
            <div class="card-body">
            <h5>2.- DESCRIPCIÓN BREVE PROYECTO</h5>
            <div class="row">
            

            <div class="col-md-12 rounded border border-dark">
             <label><b>Declaracion</b></label>
              <p>{{$Recepcion->declaracion}}</p>
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
<a href="{{ route('recepcion.pdf', $Recepcion->id) }}" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>


@endsection