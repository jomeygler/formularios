
@extends('layouts.basepdf')

@section('content')

<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>
<div>
<p> Sr.</p>
<p> José Sabat Marcos</p>
<p> Alcalde de la I. Municipalidad de Villa Alemana</p>
<p> Presente 
</div>

<div class="row" style="text-align: center;">
<h1 style="color: 2e3192;">FORMULARIO DE SOLICITUD</h1>
</div>

<div class="col-md-4">
         <table>
          <tbody>
          <tr>
                <td>
                  <label><b>Rut</b></label>
                  <p>{{$Parte->fecha}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Nombres</b></label>
                  <p>{{$Parte->nombre}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Paterno</b></label>
                  <p>{{$Parte->paterno}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Materno</b></label>
                  <p>{{$Parte->materno}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Direccion</b></label>
                  <p>{{$Parte->direccion}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Telefono</b></label>
                  <p>{{$Parte->telefono}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Email</b></label>
                  <p>{{$Parte->email}}</p>            
                </td>                
          </tr>
          <tr>
                <td>
                  <label><b>Materia</b></label>
                  <p>{{$Parte->materia}}</p>            
                </td>                
          </tr>

          </tbody>
        </table>  
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