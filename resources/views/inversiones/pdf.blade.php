
@extends('layouts.basepdf')

@section('content')

<div class="container">
<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row mt-4 mb-4" style="text-align: center;">
<h1  style="color:d60b51">FORMULARIO DE EMISIÓN DE CERTIFICADO DE INVERSIONES</h1>
<span><b>(PARA EFECTOS DE LA DETERMINACIÓN DEL CAPITAL PROPIO AFECTO A PATENTE COMERCIAL)</b></span>
</div>
<div>
<span><b>A LA DIRECCIÓN DE RENTAS:</b></span>
<p>Solicito a la Municipalidad de Villa Alemana, de acuerdo a las disposiciones del artículo 24 del Decreto ley
N°3.063, extienda certificado que acredite inversiones vigentes.</p>
</div>

<div class="card-body">
<h5>EMPRESA INVERSORA SOLICITANTE DEL CERTIFICADO</h5>
<div class="row">
            <table>
            <tbody>
                <tr>
                  <td>
                  <label><b>Nombre</b></label>
                  <p>{{$Inversione->nombre}}</p>
                  </td>
                  <td>
                  <label><b>Rut</b></label>
                  <p>{{$Inversione->rut}}</p>     
                  </td>                
                </tr>
                <tr>
                  <td>
                    <label><b>Rol Patente</b></label>
                    <p>{{$Inversione->rol}}</p>
                  </td>
                  <td>
                    <label><b>Direccion</b></label>
                    <p>{{$Inversione->direccion}}</p>
                  </td>
                </tr>
                <tr>
                  <td>
                  <label><b>telefono</b></label>
                  <p>{{$Inversione->telefono}}</p>
                  </td>
                  <td>
                   <label><b>email</b></label>
                   <p>{{$Inversione->email}}</p>
                  </td>
                </tr>
                <tr>
                <td>
                <label><b>Monto de Inversion</b></label>
                <p>{{$Inversione->montoinv}}</p>
                </td>
                </tr>
            </tbody>
            </table>

 </div>
</div>

<div class="card-body">
<h5>EMPRESA RECEPTORA DE LA INVERSIÓN</h5>
<div class="row">
          <table>
              <tbody>
                <tr>
                  <td>
                    <label><b>Nombre</b></label>
                    <p>{{$Inversione->nombre}}</p>
                  </td>
                  <td>
                   <label><b>Rut</b></label>
                   <p>{{$Inversione->rut}}</p>
                  </td>
                </tr>
                <tr>
                  <td>
                  <label><b>Rol Patente</b></label>
                  <p>{{$Inversione->rol}}</p>
                 </td>
                 <td>
                  <label><b>Direccion</b></label>
                   <p>{{$Inversione->direccion}}</p>    
                 </td>
                </tr>
              </tbody>
          </table>

</div>
</div>
<br>
<div>
<h3>REQUISITOS INDISPENSABLES</h3>
<p>DEBE PRESENTAR:<p>
<p> 1) Balance de 8 columnas de la empresa inversora y receptora.</p>
<p>2) Determinación de capital propio tributario de la empresa inversora.</p>
<p>3) Renta año tributario actual.</p>
<p>4) Certificado de inversiones emitido por la empresa receptora con nombre, rut, y frima del
representante legal o corredora de bolsa acreditando la inversión valorizada al 31 de diciembre del
año anterior.</p>
<p>5) Detalle histórico de cada inversión indicando valor inicial de esta y corrección monetaria anual
aplicada.</p>
<p>6) Detalle de la inversora y receptora.</p>
</div>
<div>
<p>MEDIANTE EL PRESENTE DECLARO QUE LA INFORMACIÓN Y DOCUMENTACIÓN PRESENTADA
PARA LA EMISIÓN DEL CERTIFICADO DE REBAJA SOLICITADO, SON FIDEDIGNOS Y SE
ENTREGAN BAJO EXCLUSIVA RESPONSABILIDAD DEL SUSCRITO REPRESENTANTE LEGAL.
</p>
</div>

<div>
<br>
<br>
<br>
<br>
<br>
<p style="text-align: center;">_____________________________</p>
<h5 style="text-align: center;">NOMBRE Y FIRMA CONTRIBUYENTE</h5>
</div>
@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   
</div>

@endsection