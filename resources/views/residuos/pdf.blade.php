
@extends('layouts.basepdf')

@section('content')
<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>

<div class="row" style="text-align: center;">
<h1 style="color: 2e3192;">DECLARACIÓN DE RESIDUOS</h1>
</div>

<div class="card-body">
<h5>1.- DIRECCIÓN DE LA PROPIEDAD</h5>
<div class="row" >
          <table>
          <tbody>
            <tr >
              <td>
                <label><b>Calle</b></label>
                <p>{{$DecResiduo->calle}}</p>
              </td>
              <td>
                <label><b>Numero</b></label>
                <p>{{$DecResiduo->numero}}</p>
              </td>
              <td>
                <label><b>Rol SII</b></label>
                <p>{{$DecResiduo->rol}}</p>
              </td>
            </tr>
            <tr>
              <td>
                <label><b>Manzana</b></label>
                <p>{{$DecResiduo->manzana}}</p>
              </td>
              <td>
                <label><b>Lote</b></label>
                <p>{{$DecResiduo->lote}}</p>
              </td>
              <td>
                <label><b>Lote O Localidad</b></label>
                <p>{{$DecResiduo->localidad}}</p>
              </td>
              <td>
                <label><b>Plano de Lote</b></label>
                <p>{{$DecResiduo->plano_lote}}</p>
              </td>
            </tr>
          </tbody>
          </table>
         
          
           
</div>
</div>


<div class="card-body">
<h5>2.- DATOS DEL PROPIETARIO</h5>
<div class="row">
          <table>
          <tbody>
              <tr>
                  <td width="75%">
                    <label><b>Nombre o Razón Social</b></label>
                    <p>{{$DecResiduo->empresa}}</p>
                  </td>
                  <td width="20%">
                    <label><b>rut</b></label>
                    <p>{{$DecResiduo->rut}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                    <label><b>Representante Legal</b></label>
                    <p>{{$DecResiduo->representante}}</p>
                  </td>
                  <td>
                    <label><b>Rut Representante</b></label>
                    <p>{{$DecResiduo->rutrepresentante}}</p>
                  </td>
              </tr>
              <tr>
                  <td>
                    <label><b>Dirección / Calle / Pasaje</b></label>
                    <p>{{$DecResiduo->direccion}}</p>
                  </td>
                  <td>
                    <label><b>Numero</b></label>
                    <p>{{$DecResiduo->numero}}</p>
                  </td>
                  <td>
                    <label><b>Comuna</b></label>
                    <p>{{$DecResiduo->comuna}}</p>
                  </td>
              </tr>
              <tr>
                <td>
                  <label><b>Telefono Fijo</b></label>
                  <p>{{$DecResiduo->telefono}}</p>
                </td>
                <td>
                  <label><b>Celular</b></label>
                  <p>{{$DecResiduo->celular}}</p>   
                </td>
                <td>
                  <label><b>Email</b></label>
                  <p>{{$DecResiduo->email}}</p>
                </td>
                
              </tr>
              
          </tbody>
          </table>
           
</div>
</div>

<div class="card-body">
<h5>3.- PROFESIONAL RESPONSABLE OBRA</h5>
<div class="row">
<div class="col-md-12">
            <table>
              <tbody>
                <tr>
                  <td>
                    <label><b>Nombre o Razón Social</b></label>
                    <p>{{$DecResiduo->pro_empresa}}</p>
                  </td>
                  <td>
                    <label><b>rut</b></label>
                    <p>{{$DecResiduo->pro_rut}}</p>
                  </td>
                  </tr>
                  <tr>
                  <td>
                    <label><b>Representante Legal</b></label>
                    <p>{{$DecResiduo->pro_representante}}</p>
                  </td>
                  <td>
                    <label><b>Rut Representante</b></label>
                    <p>{{$DecResiduo->pro_rutrepresentante}}</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label><b>Dirección / Calle / Pasaje</b></label>
                    <p>{{$DecResiduo->pro_direccion}}</p>
                  </td>
                  <td>
                    <label><b>Numero</b></label>
                    <p>{{$DecResiduo->pro_numero}}</p>
                  </td>
                  <td>
                    <label><b>Comuna</b></label>
                    <p>{{$DecResiduo->pro_comuna}}</p>
                  </td>
                </tr>
                <tr>
                  <td><label><b>Telefono Fijo</b></label>
              <p>{{$DecResiduo->pro_telefono}}</p></td>
                  <td><label><b>Celular</b></label>
              <p>{{$DecResiduo->pro_celular}}</p></td>
                  <td><label><b>Email</b></label>
              <p>{{$DecResiduo->pro_email}}</p></td>
              <td><label><b>Patente Profecional</b></label>
              <p>{{$DecResiduo->pro_patente}}</p></td>
                </tr>
              </tbody>
            </table>
         
            </div>
</div>
</div>

<div class="card-body">
<h5>4.- DISPOSICIÓN FINAL DE LOS RESIDUOS</h5>
<div class="row">
<div class="col-md-12">
              <table>
              <tbody>
              <tr>
                <td>
                  <label><b>Calle</b></label>
                  <p>{{$DecResiduo->res_calle}}</p>
                </td>
                <td>
                  <label><b>Numero</b></label>
                  <p>{{$DecResiduo->res_numero}}</p> 
                </td>
                <td>
                  <label><b>Rol SII</b></label>
                    <p>{{$DecResiduo->res_rol}}</p>
                </td>
              </tr>
              <tr>
                <td>
                  <label><b>Manzana</b></label>
                  <p>{{$DecResiduo->res_manzana}}</p>    
                </td>
                <td>
                 <label><b>Lote</b></label>
                 <p>{{$DecResiduo->res_lote}}</p>
                </td>              
                <td>
                  <label><b>Lote O Localidad</b></label>
                  <p>{{$DecResiduo->res_localidad}}</p>   
                </td>
                <td>
                  <label><b>Resolucion Sanitaria</b></label>
                  <p>{{$DecResiduo->res_sanitaria}}</p>
                </td>
              </tr>
              </tbody>
              </table>
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
<table>

<tbody>
<th>
<label><b>Materiales</b></label>
<p>{{$DecResiduo->material1}}</p>
              <p>{{$DecResiduo->material2}}</p>
              <p>{{$DecResiduo->material3}}</p>
              <p>{{$DecResiduo->material4}}</p>
              <p>{{$DecResiduo->material5}}</p>
              </th> 
              <th>
              <label><b>Cantidad</b></label>
              <p>{{$DecResiduo->cantidad1}}</p>
              <p>{{$DecResiduo->cantidad2}}</p>
              <p>{{$DecResiduo->cantidad3}}</p>
              <p>{{$DecResiduo->cantidad4}}</p>
              <p>{{$DecResiduo->cantidad5}}</p>
              </th>             
</tbody>


</table>

             <div class="col-md-8 rounded border border-dark">
             
              
            </div>


            <div class="col-md-2 rounded border border-dark">
             
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
              <p>{{$DecResiduo->antecenetes}}</p>
            </div>


</div>
</div>





@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   


@endsection