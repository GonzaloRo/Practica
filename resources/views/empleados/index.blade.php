@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($empleados as $empleado)
    <tr>
      <td> {{ $empleado->id }}</td>
      <td> {{ $empleado->Nombre }}</td>
      <td> {{ $empleado->ApellidoPaterno }}</td>
      <td> {{ $empleado->ApellidoMaterno }}</td>
      <td> {{ $empleado->Correo }}</td>
      <td> <a class="btn btn-primary" href="{{ url('/empleados/'.$empleado->id.'/edit') }}">Editar</a>
      
       | 
       <form action="{{'/empleados/'.$empleado->id}}" method="post">    
      @csrf
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿BORRAR?')">Borrar</button>
      </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
