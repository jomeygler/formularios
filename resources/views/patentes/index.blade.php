@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>patentes</h1>
          <br>
          <a class="btn btn-primary" href="/patentes/create">Nuevo</a>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($Patente as $inv)
                  <tr>
                      <td><a href="{{ route('patentes.registrada', $inv->id) }}">{{ $inv->id }}</a></td>
                      <td> <a class="btn btn-primary" href="/patentes/{{$inv->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/patentes/{{$inv->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
