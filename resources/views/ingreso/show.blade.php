
@extends('layouts.baseform')


@section('content')




<div class="card-body">
<h5>IDENTIFICACIÓN DEL JEFE DE HOGAR</h5>
<div class="row">

            <div class="col-md-12 rounded border border-dark">
              <label><b>Rut</b></label>
              <p>{{$Ingreso->rut}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
              <label><b>Nombre</b></label>
              <p>{{$Ingreso->nombre}}</p>
            </div>
            
            <div class="col-md-3 rounded border border-dark">
              <label><b>Paterno</b></label>
              <p>{{$Ingreso->paterno}}</p>
            </div>            

            <div class="col-md-3 rounded border border-dark">
              <label><b>Materno</b></label>
              <p>{{$Ingreso->materno}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Direccion</b></label>
              <p>{{$Ingreso->direccion}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark">
             <label><b>Monto</b></label>
              <p>{{$Ingreso->monto}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Origen de los fondos</b></label>
              <p>{{$Ingreso->origen_fondos}}</p>
            </div>


</div>
</div>



@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif
   




<a href="/{{ $Ingreso->id }}/ingresodescarga" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>


@endsection