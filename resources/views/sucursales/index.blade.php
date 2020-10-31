@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Partes</h1>
          <br>
          <a class="btn btn-primary" href="/sucursales/create">Nuevo</a>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($Sucursale as $inv)
                  <tr>
                      <td><a href="/{{ $inv->id }}/sucursales">{{ $inv->id }}</a></td>
                      <td> <a class="btn btn-primary" href="/sucursale/{{$inv->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/sucursales/{{$inv->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
