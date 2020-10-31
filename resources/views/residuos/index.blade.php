@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Residuos</h1>
          <br>
          <a class="btn btn-primary" href="/residuos/create">Nuevo</a>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($DecResiduo as $inv)
                  <tr>
                      <td><a href="/{{ $inv->id }}/residuos">{{ $inv->rut }}</a></td>
                      <td> <a class="btn btn-primary" href="/residuos/{{$inv->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/residuos/{{$inv->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
