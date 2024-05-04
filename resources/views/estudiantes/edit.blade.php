@extends('layouts.app')

@section('titulo', 'Editar Estudiante')

@section('contenido')
    <br>
    <h3>Editar estudiante {{ $estudiante->nombres }}</h3>
    <br>
    <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="idEstudiante" class="form-label">Documento identidad:</label>
            <input type="number" class="form-control" id="idEstudiante" name="idEstudiante" value="{{ $estudiante->documento }}">
        </div>
        <div class="mb-3">
          <label for="nombresEstudiante" class="form-label">Nombres del estudiante</label>
          <input type="text" class="form-control" id="nombresEstudiante" name="nombresEstudiante" value="{{ $estudiante->nombres }}">
        </div>
        <div class="mb-3">
          <label for="apellidosEstudiante" class="form-label">Apellidos del estudiante</label>
          <input type="text" class="form-control" id="apellidosEstudiante" name="apellidosEstudiante" value="{{ $estudiante->apellidos }}">
        </div>
        <div class="mb-3">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ $estudiante->fecha_nacimiento }}">
        </div>
        <button type="submit" class="btn btn-warning">Editar Estudiante</button>
    </form>
@endsection
