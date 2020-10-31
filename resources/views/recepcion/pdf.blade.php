
@extends('layouts.basepdf')

@section('content')

<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>

<div class="row" style="text-align: center;">
<h1 style="color: 2e3192;">CARÁTULA DE RECEPCIÓN DE DOCUMENTOS</h1>
</div>

<div class="col-md-12">
        <table>
        <tbody>
          <tr>
                <td>
                  <label><b>PROYECTO(SEGÚN O.G.U.C.)</b></label>
                  <p>{{$Recepcion->proyecto}}</p>            
                </td>                              
          </tr>
          <tr>
                <td>
                  <label><b>ROL</b></label>
                  <p>{{$Recepcion->rol}}</p>            
                </td>   
          </tr>
          <tr>
                <td>
                  <label><b>Ubicacion</b></label>
                  <p>{{$Recepcion->ubicacion}}</p>            
                </td>   
          </tr>
          <tr>
                <td>
                  <label><b>Arquitecto</b></label>
                  <p>{{$Recepcion->arquitecto}}</p>            
                </td>   
          </tr>
          <tr>
                <td>
                  <label><b>Revisor Indep.</b></label>
                  <p>{{$Recepcion->revisor}}</p>            
                </td>   
          </tr>
          <tr>
                <td>
                  <label><b>Expediente</b></label>
                  <p>{{$Recepcion->expediente}}</p>            
                </td>                 
          </tr>
          <tr>
                 <td>
                  <label><b>Fecha</b></label>
                  <p>{{$Recepcion->fecha}}</p>                       
                </td>    
          </tr>
          <tr>
                <td>
                  <label><b>DESCRIPCIÓN BREVE PROYECTO</b></label>
                  <p>{{$Recepcion->descrip}}</p>            
                </td>   
          </tr>
          <tr>
                <td>
                  <label><b>DECLARACIÓN JURADA</b></label>
                  <p>{{$Recepcion->declaracion}}</p>            
                </td>   
          </tr>
        </tbody>
        </table>

</div>

@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   


@endsection