@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Recepcion</h1>
          <br>
          <a class="btn btn-primary" href="/recepcion/create">Nuevo</a>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($Recepcion as $inv)
                  <tr>
                      <td><a href="/{{ $inv->id }}/recepcion">{{ $inv->id }}</a></td>
                      <td> <a class="btn btn-primary" href="/recepcion/{{$inv->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/recepcion/{{$inv->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
