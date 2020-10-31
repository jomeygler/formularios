
@extends('layouts.basepdf')

@section('content')
<div class="container">

<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>

<div class="row" style="text-align: center;">
<h1 style="color:d60b51">SOLICITUD DE PATENTE MUNICIPAL</h1>
</div>


<div class="card-body">
<h5>B) TRÁMITE QUE REALIZARÁ</h5>
<div class="row">

<div class="col-md-9 rounded border border-dark Subraya">
             <label><b>Tramite que Realiza</b></label>
              <p>{{$Patente->nombretramite}}</p>
            </div>
         
</div>
</div>

<div class="card-body">
<h5>C) PARA LOS TRÁMITES SIGUIENTES INDICAR ROL DE PATENTE (S):</h5>
<div class="row">

      <div class="col-md-9">
         <table>
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
<div class="row mb-3 Subraya">
      <table>
            <tr>
                <td>
                  <label><b>Rut</b></label>
                  <p>{{$Patente->rut}}</p>            
                </td>
                <td>            
                <label><b>Nombre</b></label>
                  <p>{{$Patente->nombre}}</p>            
                </td>
            </tr>
            <tr>
                <td>            
                <label><b>Direccion</b></label>
                  <p>{{$Patente->direccion}}</p>
                </td>
                <td>                
                <label><b>telefono</b></label>
                 <p>{{$Patente->telefono}}</p>
                </td>
             </tr>
             <tr>
                <td>            
                <label><b>Celular</b></label>
                  <p>{{$Patente->celular}}</p>
                  </td>
                  <td>           
                <label><b>email</b></label>
                  <p>{{$Patente->email}}</p>
                  </td>
            </tr>
       </table>
</div>
</div>

<div class="card-body">
<h5>E) DATOS DEL LOCAL COMERCIAL PARA: PATENTE NUEVA, APERTURA SUCURSAL O TRASLADOS</h5>
<div class="row mb-3 Subraya">
       <table>
           <tr>
            <td>
             <label><b>Giro</b></label>
              <p>{{$Patente->giro}}</p>
            </td>
          </tr>
          <tr>
            <td>
             <label><b>Capital de Inicio</b></label>
              <p>{{$Patente->capital}}</p>
             </td>
          </tr>
          <tr>
             <td>
             <label><b>Avaluo</b></label>
              <p>{{$Patente->avaluo}}</p>
             </td>
          </tr>
        </table>
</div>
</div>

<div class="card-body">
<h5>F) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL (Art. 12, del reglamento ley 3.063 de rentas
municipales)</h5>
<div class="row Subraya">
        <table>
          <tr>
            <td>
                <label><b>Rut</b></label>
                  <p>{{$Patente->rep_rut}}</p>               
            </td>
             <td>
                <label><b>Nombre</b></label>
                  <p>{{$Patente->rep_nombre}}</p>
            </td>    
         </tr>     
          <tr>
            <td>               
                <label><b>Direccion</b></label>
                  <p>{{$Patente->rep_direccion}}</p>
            </td>
            <td>               
                <label><b>telefono</b></label>
                  <p>{{$Patente->rep_telefono}}</p>
            </td>
          </tr>  
            <tr>
            <td>   
                <label><b>Celular</b></label>
                  <p>{{$Patente->rep_celular}}</p>
            </td>
            <td>               
                <label><b>email</b></label>
                  <p>{{$Patente->rep_email}}</p>
            </td>
            </tr>
            </table>
</div>
</div>

     <div class="card-body">
      <h5>G) PROPAGANDA</h5>
      <div class="row">

      <div class="col-md-12 rounded border border-dark">
         <table>
          <tbody>
            <tr> <td><b>PROPAGANDA </b></td><td><p>@if(!empty ($Patente->propaganda)  )<p> SI  </p> @else <p>NO</p> @endif</p></td></tr>
            
          </tbody>
         </table>
         <table>
           <tbody>         
            <tr>
              <td>
                <label><b>Aviso luminoso (Excluido neón) DIMENSIONES EN Mtrs 2</b></label>
                <p>{{$Patente->luminoso_aviso}}</p>
              </td>
            </tr>  
            <tr>  
              <td>
                <label><b>Aviso con neón DIMENSIONES EN Mtrs 2</b></label>
                <p>{{$Patente->neon_aviso}}</p>
              </td>
            </tr> 
            <tr>
              <td>
                <label><b>Aviso no iluminado DIMENSIONES EN Mtrs 2</b></label>
                <p>{{$Patente->noluminoso_aviso}}</p>
              </td>
            </tr>
          </tbody>
        </table>  
     </div>
         
      </div>
      </div>

      <div class="card-body Subraya">
      <h5>H) UBICAIÓN DEL LOCAL COMERCIAL:</h5>
      <div class="row">
        <table>
           <tr>
             <td>
             <label><b>Permiso de edificación y recepción</b></label>
              <p>{{$Patente->ubicacion}}</p>
             </td>
            </tr>
        </table>    


      </div>
      </div>

<div>
<br>
<br>
<br>
<p style="text-align: center;">_____________________________</p>
<h5 style="text-align: center;">NOMBRE Y FIRMA CONTRIBUYENTE</h5>
</div>
<br>
<br>
<div class="Subraya" style=" width: 100%; height: 150px;">
<p>Para uso del Departamento de Obras:</p>
</div>

<div>
<br>
<br>
<p>IMPORTANTE:</p>
<p>
Si el contribuyente no cuenta con antecedentes de la construcción, puede obtenerlos en la
Dirección de Obras Municipales, de lo contrario, deberá efectuar desarchivo de expedientes.</p>
<p>
La veracidad de los antecedentes es de exclusiva responsabilidad del solicitante.</p>
<p>
Es de responsabilidad del contribuyente retirar la respuesta a su solicitud en dependencias
de la Dirección de Rentas.</p>
Contacto: Fono 32 3140165 o a los correos: aolmos@villalemana.cl ,
leonardo.meza@villalemana.cl, snogales@villalemana.cl.
</div>

</div>
@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   


@endsection