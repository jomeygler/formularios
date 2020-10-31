
@extends('layouts.basepdf')

@section('content')

<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row" style="text-align: center;">
<h1 style="color: 2e3192;">SOLICITUD LEY 21.207</h1>
<p>(Para Micro, Pequeña o Mediana Empresa que deseen acogerse al beneficio de la Ley de aplazar
el vencimiento de pago y pago en cuotas de la Patente Comercial. aprobado por Decreto
Alcaldicio N° 395 de 21/02/2020)</p>
<p>aolmos@villalemana.cl - leonardo.meza@villalemana.cl - snogales@villalemana.cl
(FAVOR COMPLETAR CON LETRA LEGIBLE)</p>
</div>

<div class="card-body">
<h5>1.- Formulario</h5>
<div class="row">
         <div class="col-md-9 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Fecha</b></label>
              <p>{{$Ley->fecha}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut Titular Patente</b></label>
              <p>{{$Ley->ruttitular}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Nombre Titular Patente</b></label>
              <p>{{$Ley->titular}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut Solicitante</b></label>
              <p>{{$Ley->rutsolicitante}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Nombre Solicitante</b></label>
              <p>{{$Ley->solicitante}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rol Patente</b></label>
              <p>{{$Ley->rol}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Direccion Comercial</b></label>
              <p>{{$Ley->dir_comercial}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Direccion Particular</b></label>
              <p>{{$Ley->dir_particular}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>telefono</b></label>
              <p>{{$Ley->telefono}}</p>
            </div>

            
            <div class="col-md-7 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
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
<div>
<p>Debera adjuntar a la presente solicitud:</p>
<p>a) Cédula de identidad.</p>
<p>b) Inicio de actividades, donde indique segmento tributario al que pertenezca (Micro, pequeña o
mediana empresa).</p>
<p>c) Declaración de Renta año 2019 (FORM 22).</p>
<p>d) Poder notarial vigente en caso de realizar trámite por un tercero.</p>
Enviar a correo electrónico: aolmos@villalemana.cl - leonardo.meza@villalemana.cl</p>
snogales@villalemana.cl</p>
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
   


@endsection