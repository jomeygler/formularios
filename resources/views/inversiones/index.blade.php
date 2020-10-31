@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Partes</h1>
          <br>
          <a class="btn btn-primary" href="/inversiones/create">Nuevo</a>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($Inversione as $inv)
                  <tr>
                      <td><a href="/{{ $inv->id }}/inversiones">{{ $inv->id }}</a></td>
                      <td> <a class="btn btn-primary" href="/inversiones/{{$inv->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/inversiones/{{$inv->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
