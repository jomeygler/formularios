
@extends('layouts.baseform')


@section('content')
<div class="container">
<div class="row mt-4 mb-4  justify-content-center">
<h1> SOLICITUD TÉRMINO DE NEGOCIO</h1>
</div>

<div class="card-body">
<h5>I) INDIVIDUALIZACIÓN DEL CONTRIBUYENTE</h5>
<div class="row">

           <div class="col-md-12 rounded border border-dark">
             <label><b>Razón Social</b></label>
              <p>{{$Termino->nombre}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>R.U.T. (Razón Social)</b></label>
              <p>{{$Termino->rut}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol Patente</b></label>
              <p>{{$Termino->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Domicilio</b></label>
              <p>{{$Termino->direccion}}</p>
            </div>

            <div class="col-md-5 rounded border border-dark">
             <label><b>telefono</b></label>
              <p>{{$Termino->telefono}}</p>
            </div>
            
            <div class="col-md-7 rounded border border-dark">
             <label><b>email</b></label>
              <p>{{$Termino->email}}</p>
            </div>
          

</div>
</div>

<div class="card-body">
<h5>II) INDIVIDUALIZACIÓN DEL REPRESENTANTE LEGAL</h5>
<div class="row">


            <div class="col-md-12 rounded border border-dark">
             <label><b>Nombre</b></label>
              <p>{{$Termino->representante}}</p>
            </div>
            
            <div class="col-md-5 rounded border border-dark">
             <label><b>Rut</b></label>
              <p>{{$Termino->rutrepresentante}}</p>
            </div>            

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol Patente</b></label>
              <p>{{$Termino->rol}}</p>
            </div>

            <div class="col-md-9 rounded border border-dark">
             <label><b>Rol</b></label>
              <p>{{$Termino->direccion}}</p>
            </div>


</div>
</div>



@if (session('status'))
<div class = "alert alert-success">
{{session('status')}} 
</div>
@endif
   




<a href="{{ route('termino.pdf' , $Termino->id )}}" target="_blank" class="btn btn-success">
            Descargar PDF
        </a>
</div>
@endsection