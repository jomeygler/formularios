
@extends('layouts.baseform')


@section('content')
<div class="container">
<div class="row mt-4 mb-4  justify-content-center">
<h1>Formulario De solicitud</h1>
</div>

<div class="card-body">
<h5>1.- Formulario</h5>
<div class="row">
         <div class="col-md-9 rounded border border-dark">
             <label><b>Fecha</b></label>
              <p>{{$Parte->fecha}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Parte->rut}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Nombre</b></label>
              <p>{{$Parte->nombre}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Paterno</b></label>
              <p>{{$Parte->paterno}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Materno</b></label>
              <p>{{$Parte->materno}}</p>
            </div>


            <div class="col-md-9 rounded border border-dark">
             <label><b>Direccion</b></label>
              <p>{{$Parte->direccion}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Comuna</b></label>
              <p>{{$Parte->comuna}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>telefono</b></label>
              <p>{{$Parte->telefono}}</p>
            </div>

            
            <div class="col-md-7 rounded border border-dark">
             <label><b>email</b></label>
              <p>{{$Parte->email}}</p>
            </div>

            <div class="col-md-12 rounded border border-dark">
             <label><b>Materia</b></label>
              <p>{{$Parte->materia}}</p>
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
<a href="{{ route('partes.pdf', $Parte->id) }}" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>
</div>

@endsection