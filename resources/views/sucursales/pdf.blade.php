
@extends('layouts.basepdf')

@section('content')


<div>
<img src = "http://190.13.66.88/images/logomva.png" class="justify-content-end" alt="logo" width="200" height="60">
</div>


<div class="row mt-4 mb-4  justify-content-center">
<h1>DECLARACIÓN DE SUCURSALES Y N° DE TRABAJADORES</h1>
</div>
<div>

<div class="card-body">
<h5>A) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
<div class="row">

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut</b></label>
              <p>{{$Sucursale->rut}}</p>
            </div>                

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;"> 
             <label><b>Razon Social</b></label>
              <p>{{$Sucursale->nombre}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Email</b></label>
              <p>{{$Sucursale->email}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Dirección</b></label>
              <p>{{$Sucursale->direccion}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Giro</b></label>
              <p>{{$Sucursale->giro}}</p>
            </div>

            <div class="col-md-6 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rol Patente</b></label>
              <p>{{$Sucursale->rol}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Representante legal (R.L.)</b></label>
              <p>{{$Sucursale->representante}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Rut Representante</b></label>
              <p>{{$Sucursale->rutrepresentante}}</p>
            </div>

            <div class="col-md-3 rounded border border-dark" style= "border-style: solid; border-width: 1px;">
             <label><b>Teléfono (R.L.) </b></label>
              <p>{{$Sucursale->Rep_telefono}}</p>
            </div>
<br>
            </div>
            </div>

          <div class="card-body">
          <h5>B) DETALLE CASA MATRIZ Y SUCURSALES Y N° DE TRABAJADORES</h5>
          <div class="row">
          <div class="col-md-12"><p> Casa Matriz</p></div>
          <table>
                <tbody>
                <tr>
                  <td>
                    <div class="col-md-4 rounded border border-dark" >
                    <label><b>Comuna </b></label>
                      <p>{{$Sucursale->comuna1}}</p>
                    </div>
                  </td>
                   <td>
                      <div class="col-md-4 rounded border border-dark">
                        <label><b>Rol </b></label>
                         <p>{{$Sucursale->rol1}}</p>
                      </div>
                   </td>                 
                   <td>
                     <div class="col-md-4 rounded border border-dark">
                       <label><b>Trabajadores </b></label>
                        <p>{{$Sucursale->trabajadores1}}</p>
                      </div>
                   </td>
                </tr>
                </tbody>
                </table>

                 
            
            

            <div class="col-md-12"><p> Sucursales</p></div>

            <table>
                 <tbody>
                    <tr>
                        <td>
                          <div class="col-md-4 rounded border border-dark">
                            <label><b>Comuna </b></label>
                            <p>{{$Sucursale->comuna2}}</p>
                          </div>
                        </td>
                        <td>
                          <div class="col-md-4 rounded border border-dark">
                            <label><b>Rol </b></label>
                            <p>{{$Sucursale->rol2}}</p>
                          </div>
                        </td>
                        <td>                        
                           <div class="col-md-4 rounded border border-dark">
                              <label><b>Trabajadores </b></label>
                              <p>{{$Sucursale->trabajadores2}}</p>
                           </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>{{$Sucursale->comuna3}}</p>           
                        </td>
                        <td>
                        <p>{{$Sucursale->rol3}}</p>
                        </td>
                        <td>
                        <p>{{$Sucursale->trabajadores3}}</p>
                        </td>
                    </tr>
                    <tr>
                       <td>
                       <p>{{$Sucursale->comuna4}}</p>
                       </td>
                       <td>
                       <p>{{$Sucursale->rol4}}</p>
                       </td>
                       <td>
                       <p>{{$Sucursale->trabajadores4}}</p>
                       </td>
                    </tr>
                    <tr>
                      <td>
                      <p>{{$Sucursale->comuna5}}</p>        
                      </td>
                      <td>
                      <p>{{$Sucursale->rol5}}</p>
                      </td>
                      <td>
                      <p>{{$Sucursale->trabajadores5}}</p>        
                      </td>
                    </tr>

                 </tbody>
                 </table>


          </div>
          </div>


@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
   


@endsection