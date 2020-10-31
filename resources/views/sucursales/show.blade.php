
@extends('layouts.baseform')


@section('content')

<div class="row mt-4 mb-4  justify-content-center">
<h1>DECLARACIÓN DE SUCURSALES Y N° DE TRABAJADORES</h1>
</div>

<div class="card-body">
<h5>A) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
<div class="row">

            <div class="col-md-6 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Sucursale->rut}}</p>
            </div>                

            <div class="col-md-6 rounded border border-dark">
             <label><b>Razon Social</b></label>
              <p>{{$Sucursale->nombre}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Email</b></label>
              <p>{{$Sucursale->email}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Dirección</b></label>
              <p>{{$Sucursale->direccion}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Giro</b></label>
              <p>{{$Sucursale->giro}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Rol Patente</b></label>
              <p>{{$Sucursale->rol}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>Representante</b></label>
              <p>{{$Sucursale->representante}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Rut Representante</b></label>
              <p>{{$Sucursale->rutrepresentante}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Telefono Representante </b></label>
              <p>{{$Sucursale->rep_telefono}}</p>
            </div>

            </div>
            </div>


          <div class="card-body">
          <h5>B) DETALLE CASA MATRIZ Y SUCURSALES Y N° DE TRABAJADORES</h5>
          <div class="row">

          <div class="col-md-6 rounded border border-dark">
             <label><b>Comuna </b></label>
              <p>{{$Sucursale->comuna1}}</p>
            </div>


            <div class="col-md-6 rounded border border-dark">
             <label><b>Rol </b></label>
              <p>{{$Sucursale->rol1}}</p>
            </div>


            <div class="col-md-6 rounded border border-dark">
             <label><b>Trabajadores </b></label>
              <p>{{$Sucursale->trabajadores1}}</p>
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
   




<a href="/{{ $Sucursale->id }}/sucursalesdescarga" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>


@endsection