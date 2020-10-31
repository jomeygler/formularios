
@extends('layouts.baseform')


@section('content')

<div class="row mt-4 mb-4  justify-content-center">
<h1>DECLARACION DE RESIDUOS</h1>
</div>

<div class="card-body">
<h5>1.- DIRECCIÓN DE LA PROPIEDAD</h5>
<div class="row">
         <div class="col-md-7 rounded border border-dark">
             <label><b>Calle</b></label>
              <p>{{$DecResiduo->calle}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Numero</b></label>
              <p>{{$DecResiduo->numero}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Rol SII</b></label>
              <p>{{$DecResiduo->rol}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Manzana</b></label>
              <p>{{$DecResiduo->manzana}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Lote</b></label>
              <p>{{$DecResiduo->lote}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>Lote O Localidad</b></label>
              <p>{{$DecResiduo->localidad}}</p>
            </div>


            <div class="col-md-3 rounded border border-dark">
             <label><b>Plano de Lote</b></label>
              <p>{{$DecResiduo->plano_lote}}</p>
            </div>

</div>
</div>


<div class="card-body">
<h5>2.- DATOS DEL PROPIETARIO</h5>
<div class="row">
         <div class="col-md-8 rounded border border-dark">
             <label><b>Nombre o Razón Social</b></label>
              <p>{{$DecResiduo->empresa}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark">
             <label><b>rut</b></label>
              <p>{{$DecResiduo->rut}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Representante Legal</b></label>
              <p>{{$DecResiduo->representante}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark">
             <label><b>Rut Representante</b></label>
              <p>{{$DecResiduo->rutrepresentante}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Dirección / Calle / Pasaje</b></label>
              <p>{{$DecResiduo->direccion}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Numero</b></label>
              <p>{{$DecResiduo->numero}}</p>
            </div>


            <div class="col-md-3 rounded border border-dark">
             <label><b>Comuna</b></label>
              <p>{{$DecResiduo->comuna}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Telefono Fijo</b></label>
              <p>{{$DecResiduo->telefono}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Celular</b></label>
              <p>{{$DecResiduo->celular}}</p>
            </div>


            <div class="col-md-6 rounded border border-dark">
             <label><b>Email</b></label>
              <p>{{$DecResiduo->email}}</p>
            </div>

</div>
</div>

<div class="card-body">
<h5>3.- PROFESIONAL RESPONSABLE OBRA</h5>
<div class="row">
         <div class="col-md-8 rounded border border-dark">
             <label><b>Nombre o Razón Social</b></label>
              <p>{{$DecResiduo->pro_empresa}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark">
             <label><b>rut</b></label>
              <p>{{$DecResiduo->pro_rut}}</p>
            </div>

            <div class="col-md-8 rounded border border-dark">
             <label><b>Representante Legal</b></label>
              <p>{{$DecResiduo->pro_representante}}</p>
            </div>

            <div class="col-md-4 rounded border border-dark">
             <label><b>Rut Representante</b></label>
              <p>{{$DecResiduo->pro_rutrepresentante}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Dirección / Calle / Pasaje</b></label>
              <p>{{$DecResiduo->pro_direccion}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Numero</b></label>
              <p>{{$DecResiduo->pro_numero}}</p>
            </div>


            <div class="col-md-3 rounded border border-dark">
             <label><b>Comuna</b></label>
              <p>{{$DecResiduo->pro_comuna}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Telefono Fijo</b></label>
              <p>{{$DecResiduo->pro_telefono}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Celular</b></label>
              <p>{{$DecResiduo->pro_celular}}</p>
            </div>


            <div class="col-md-5 rounded border border-dark">
             <label><b>Email</b></label>
              <p>{{$DecResiduo->pro_email}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Patente Profecional</b></label>
              <p>{{$DecResiduo->pro_patente}}</p>
            </div>
</div>
</div>

<div class="card-body">
<h5>4.- DISPOSICIÓN FINAL DE LOS RESIDUOS</h5>
<div class="row">
         <div class="col-md-7 rounded border border-dark">
             <label><b>Calle</b></label>
              <p>{{$DecResiduo->res_calle}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Numero</b></label>
              <p>{{$DecResiduo->res_numero}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Rol SII</b></label>
              <p>{{$DecResiduo->res_rol}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Manzana</b></label>
              <p>{{$DecResiduo->res_manzana}}</p>
            </div>

            <div class="col-md-2 rounded border border-dark">
             <label><b>Lote</b></label>
              <p>{{$DecResiduo->res_lote}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>Lote O Localidad</b></label>
              <p>{{$DecResiduo->res_localidad}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Resolucion Sanitaria</b></label>
              <p>{{$DecResiduo->res_sanitaria}}</p>
            </div>

</div>
</div>

<div class="card-body">
<h5>5.- COMPOSICIÓN DE RESIDUOS A GENERAR</h5>
<div class="row">

             <div class="col-md-10 rounded border border-dark">
              <p>{{$DecResiduo->res_detalle}}</p>
            </div>

</div>
</div>

<div class="card-body">
<h5>6.- CANTIDAD DE RESIDUOS A GENERAR</h5>
<div class="row">

             <div class="col-md-8 rounded border border-dark">
             <label><b>Materiales</b></label>
              <p>{{$DecResiduo->material1}}</p>
              <p>{{$DecResiduo->material2}}</p>
              <p>{{$DecResiduo->material3}}</p>
              <p>{{$DecResiduo->material4}}</p>
              <p>{{$DecResiduo->material5}}</p>
            </div>


            <div class="col-md-2 rounded border border-dark">
             <label><b>Cantidad</b></label>
              <p>{{$DecResiduo->cantidad1}}</p>
              <p>{{$DecResiduo->cantidad2}}</p>
              <p>{{$DecResiduo->cantidad3}}</p>
              <p>{{$DecResiduo->cantidad4}}</p>
              <p>{{$DecResiduo->cantidad5}}</p>
            </div>
</div>
</div>

<div class="card-body">
<h5>7.- DESCRIPCIÓN DEL PROCESO DE ACOPIO Y RETIRO DE RESIDUOS</h5>
<div class="row">
 
             <div class="col-md-10 rounded border border-dark">
             <label><b></b></label>
              <p>{{$DecResiduo->descrip_proc}}</p>
            </div>

            <div class="col-md-10 rounded border border-dark">
             <label><b>Observaciones</b></label>
              <p>{{$DecResiduo->notas}}</p>
            </div>

            <div class="col-md-10 rounded border border-dark">
             <label><b>Antecendetes</b></label>
              <p>{{$DecResiduo->antecedentes}}</p>
            </div>


</div>
</div>



@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif

<a href="/" class = "btn btn-prymary">Volver</a>
<a href="{{ route('residuos.pdf', $DecResiduo->id) }}" target="_blank" class="btn btn-success">
<!--<a href="/{{ $DecResiduo->id }}/residuosdescarga" target="_blank" class="btn btn-success">-->
            Descargar PDF
        </a>




@endsection