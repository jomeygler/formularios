
@extends('layouts.baseform')


@section('content')

<div class="row mt-4 mb-4  justify-content-center">
<h1>FORMULARIO DE EMISIÓN DE CERTIFICADO DE INVERSIONES</h1>
</div>

<div class="card-body">
<h5>EMPRESA INVERSORA SOLICITANTE DEL CERTIFICADO</h5>
<div class="row">

           <div class="col-md-12 rounded border border-dark">
             <label><b>Nombre</b></label>
              <p>{{$Inversione->nombre}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Inversione->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol Patente</b></label>
              <p>{{$Inversione->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Direccion</b></label>
              <p>{{$Inversione->direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>telefono</b></label>
              <p>{{$Inversione->telefono}}</p>
            </div>
            
            <div class="col-md-7 rounded border border-dark">
             <label><b>email</b></label>
              <p>{{$Inversione->email}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Monto de Inversion</b></label>
              <p>{{$Inversione->montoinv}}</p>
            </div>
                        

            </div>
            </div>

</div>
</div>

<div class="card-body">
<h5>EMPRESA RECEPTORA DE LA INVERSIÓN</h5>
<div class="row">


            <div class="col-md-12 rounded border border-dark">
             <label><b>Nombre</b></label>
              <p>{{$Inversione->nombre}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Inversione->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol Patente</b></label>
              <p>{{$Inversione->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol</b></label>
              <p>{{$Inversione->direccion}}</p>
            </div>


</div>
</div>



@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif
   

<a href="/activo/" class = "btn btn-prymary">Volver</a>
<a href="{{ route('inversiones.pdf',$Inversione->id) }}" target="_blank" class="btn btn-success">
            Descargar  PDF
        </a>


@endsection