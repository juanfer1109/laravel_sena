@extends('layouts.app')

@section('titulo', 'Lista cursos')

@section('contenido')
    <br>
    <h3>Listado de cursos disponibles</h3>
    <a href="{{ route('cursos.create') }}">Crear nuevo curso</a>
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->descripcion }}</td>
                    <td><a href="{{ route('cursos.show', $curso) }}" class="btn btn-primary">Ver detalles</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>

@endsection
