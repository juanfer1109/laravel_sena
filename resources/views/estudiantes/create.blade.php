@extends('layouts.app')

@section('titulo', 'Crear estudiante')

@section('contenido')
    <br>
    <h3>Crear un nuevo estudiante</h3>
    <br>
    <form action="/estudiantes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="idEstudiante" class="form-label">Documento del estudiante</label>
            <input type="number" class="form-control" id="idEstudiante" name="idEstudiante">
        </div>
        <div class="mb-3">
          <label for="nombresEstudiante" class="form-label">Nombres del estudiante</label>
          <input type="text" class="form-control" id="nombresEstudiante" name="nombresEstudiante">
        </div>
        <div class="mb-3">
          <label for="apellidosEstudiante" class="form-label">Apellidos del estudiante</label>
          <input type="text" class="form-control" id="apellidosEstudiante" name="apellidosEstudiante">
        </div>
        <div class="mb-3">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
        </div>
        <div class="mb-3">
            <label for="fotoEstudiante" class="form-label">Foto del Estudiante</label>
            <input type="file" class="form-control" id="fotoEstudiante" name="fotoEstudiante">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
