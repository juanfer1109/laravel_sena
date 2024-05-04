@extends('layouts.app')

@section('titulo', 'Lista estudiantes')

@section('contenido')
    <br>
    <h3>Listado de estudiantes</h3>
    <a href="{{ route('estudiantes.create') }}">Crear nuevo estudiante</a>
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Documento</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->documento }}</td>
                    <td>{{ $estudiante->nombres }}</td>
                    <td>{{ $estudiante->apellidos }}</td>
                    <td><a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-primary">Ver detalles</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>

@endsection
