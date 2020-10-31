
@extends('layouts.baseform')


@section('content')

<div class="row mt-4 mb-4  justify-content-center">
<h1>SOLICITUD DE PATENTE MUNICIPAL</h1>
</div>

<div class="card-body">
<h5>B) TRÁMITE QUE REALIZARÁ</h5>
<div class="row">

<div class="col-md-9 rounded border border-dark">
             <label><b>Tramite que Realiza</b></label>
              
              <p>{{$Patente->nombretramite}}</p>
            </div>
         

</div>
</div>

<div class="card-body">
<h5>C) PARA LOS TRÁMITES SIGUIENTES INDICAR ROL DE PATENTE (S):</h5>
<div class="row">

      <div class="col-md-9 rounded border border-dark">
         <table>
         <thead>
        </thead>
          <tbody>
            <tr> <td><b>Traslado de Patente: </b></td><td><p>@if(!empty ($Patente->rol1)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Apertura de Sucursal con Casa Matriz en Villa Alemana: </b></td><td><p>@if(!empty ($Patente->rol2)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Cambio de Razón SocialTraslado de Patente: </b></td><td><p>@if(!empty ($Patente->rol3)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Transferencia de Patente: </b></td><td><p>@if(!empty ($Patente->rol4)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Ampliación de Giro: </b></td><td><p>@if(!empty ($Patente->rol5)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Cambio de Giro: </b></td><td><p>@if(!empty ($Patente->rol6)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Transmisión de Patente: </b></td><td><p>@if(!empty ($Patente->rol7)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Factibilidad: </b></td><td><p>@if(!empty ($Patente->rol8)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            <tr> <td><b>Otros: </b></td><td><p>@if(!empty ($Patente->rol9)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
          </tbody>
        </table>  
     </div>
</div>
</div>

<div class="card-body">
<h5>D) INDIVIDUALIZACIÓN DEL SOLICITANTE</h5>
<div class="row">

          <div class="col-md-5 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Patente->rut}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Nombre</b></label>
              <p>{{$Patente->nombre}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Direccion</b></label>
              <p>{{$Patente->direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>telefono</b></label>
              <p>{{$Patente->telefono}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Celular</b></label>
              <p>{{$Patente->celular}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>email</b></label>
              <p>{{$Patente->email}}</p>
            </div>


</div>
</div>

<div class="card-body">
<h5>E) DATOS DEL LOCAL COMERCIAL PARA: PATENTE NUEVA, APERTURA SUCURSAL O TRASLADOS</h5>
<div class="row">

<div class="col-md-12 rounded border border-dark">
             <label><b>Giro</b></label>
              <p>{{$Patente->giro}}</p>
            </div>

            <div class="col-md-12 rounded border border-dark">
             <label><b>Capital de Inicio</b></label>
              <p>{{$Patente->capital}}</p>
            </div>

            <div class="col-md-12 rounded border border-dark">
             <label><b>Avaluo</b></label>
              <p>{{$Patente->avaluo}}</p>
            </div>

</div>
</div>

<div class="card-body">
<h5>F) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL (Art. 12, del reglamento ley 3.063 de rentas
municipales)</h5>
<div class="row">

           <div class="col-md-5 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Patente->rep_rut}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>Nombre</b></label>
              <p>{{$Patente->rep_nombre}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Direccion</b></label>
              <p>{{$Patente->rep_direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>telefono</b></label>
              <p>{{$Patente->rep_telefono}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Celular</b></label>
              <p>{{$Patente->rep_celular}}</p>
            </div>

            <div class="col-md-7 rounded border border-dark">
             <label><b>email</b></label>
              <p>{{$Patente->rep_email}}</p>
            </div>


</div>
</div>


     <div class="card-body">
      <h5>G) PROPAGANDA</h5>
      <div class="row">

      <div class="col-md-9 rounded border border-dark">
         <table>
         <thead>
        </thead>
          <tbody>
            <tr> <td><b>PROPAGANDA </b></td><td><p>@if(!empty ($Patente->propaganda)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            
          </tbody>
        </table>  
     </div>
         <div class="col-md-7 rounded border border-dark">
                <label><b>Aviso luminoso (Excluido neón) DIMENSIONES EN Mtrs 2</b></label>
                <p>{{$Patente->luminoso_aviso}}</p>
         </div>
         <div class="col-md-7 rounded border border-dark">
                <label><b>Aviso con neón DIMENSIONES EN Mtrs 2</b></label>
                <p>{{$Patente->neon_aviso}}</p>
         </div>
         <div class="col-md-7 rounded border border-dark">
                <label><b>Aviso no iluminado DIMENSIONES EN Mtrs 2</b></label>
                <p>{{$Patente->noluminoso_aviso}}</p>
         </div>
         
      </div>
      </div>

      <div class="card-body">
      <h5>H) UBICAIÓN DEL LOCAL COMERCIAL:</h5>
      <div class="row">

      <div class="col-md-7 rounded border border-dark">
             <label><b>Permiso de edificación y recepción</b></label>
              <p>{{$Patente->ubicacion}}</p>
            </div>


      </div>
      </div>




@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif

<a class="btn btn-success" href="{{ route('patentes.pdf', $Patente->id) }}" target="_blank" class="btn btn-sm btn-primary">
            Descargar PDF
        </a>


@endsection