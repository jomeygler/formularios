
@extends('layouts.baseform')


@section('content')
<div class="container">
<div class="row mt-4 mb-4  justify-content-center">
<h1>SOLICITUD LEY 21.207</h1>
<h5>(Para Micro, Pequeña o Mediana Empresa que deseen acogerse al beneficio de la Ley de aplazar
el vencimiento de pago y pago en cuotas de la Patente Comercial. aprobado por Decreto
Alcaldicio N° 395 de 21/02/2020)</h5>
<p>aolmos@villalemana.cl - leonardo.meza@villalemana.cl - snogales@villalemana.cl
(FAVOR COMPLETAR CON LETRA LEGIBLE)</p>
</div>

<div class="card-body">
<h5>1.- Formulario</h5>
<div class="row">
         <div class="col-md-9 rounded border border-dark">
             <label><b>Fecha</b></label>
              <p>{{$Ley->fecha}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Rut Titular Patente</b></label>
              <p>{{$Ley->ruttitular}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Nombre Titular Patente</b></label>
              <p>{{$Ley->titular}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Rut Solicitante</b></label>
              <p>{{$Ley->rutsolicitante}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark">
             <label><b>Nombre Solicitante</b></label>
              <p>{{$Ley->solicitante}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol Patente</b></label>
              <p>{{$Ley->rol}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Direccion Comercial</b></label>
              <p>{{$Ley->dir_comercial}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark">
             <label><b>Direccion Particular</b></label>
              <p>{{$Ley->dir_particular}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>telefono</b></label>
              <p>{{$Ley->telefono}}</p>
            </div>

            
            <div class="col-md-7 rounded border border-dark">
             <label><b>email</b></label>
              <p>{{$Ley->email}}</p>
            </div>


            </div>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <table>
              <tbody>
                 <tr> <td><b>Solicitar aplazar pago de patente  </b></td><td><p>@if(!empty ($Ley->solicitud1)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
                 <tr> <td><b>Solicitar pago de patente hasta en 6 cuotas </b></td><td><p>@if(!empty ($Ley->solicitud2)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
             </tbody>
            </table>  
            </div>
</div>
</div>


</div>
</div>
<div>
<p> Debera adjuntar a la presente solicitud:</p>
<p>a) Cédula de identidad.</p>
<p>b) Inicio de actividades, donde indique segmento tributario al que pertenezca (Micro, pequeña o
mediana empresa).</p>
<p>c) Declaración de Renta año 2019 (FORM 22).</p>
<p>d) Poder notarial vigente en caso de realizar trámite por un tercero.
Enviar a correo electrónico: aolmos@villalemana.cl - leonardo.meza@villalemana.cl
snogales@villalemana.cl</p>
</div>

@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif

<a href="/" class = "btn btn-prymary">Volver</a>

<a href="{{route('ley.pdf', $Ley->id) }}" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>
</div>

@endsection