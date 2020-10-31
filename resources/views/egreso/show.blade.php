
@extends('layouts.baseform')


@section('content')




<div class="card-body">
<h5>IDENTIFICACIÓN DEL JEFE DE HOGAR</h5>
<div class="row">

            <div class="col-md-12 rounded border border-dark">
              <label><b>Rut</b></label>
              <p>{{$Egreso->rut}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
              <label><b>Nombre</b></label>
              <p>{{$Egreso->nombre}}</p>
            </div>
            
            <div class="col-md-3 rounded border border-dark">
              <label><b>Paterno</b></label>
              <p>{{$Egreso->paterno}}</p>
            </div>            

            <div class="col-md-3 rounded border border-dark">
              <label><b>Materno</b></label>
              <p>{{$Egreso->materno}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Direccion</b></label>
              <p>{{$Egreso->direccion}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark">
             <label><b>Telefono</b></label>
              <p>{{$Egreso->telefono}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Ocupacion</b></label>
              <p>{{$Egreso->ocupacion}}</p>
            </div>


</div>
</div>

<div class="card-body">
<h5>IDENTIFICACIÓN DEL JEFE DE HOGAR</h5>
<div class="row">

</div>
</div>



@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif
   




<a href="/{{ $Egreso->id }}/ingresodescarga" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>


@endsection