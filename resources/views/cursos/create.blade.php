@extends('layouts.app')

@section('titulo', 'Crear curso')

@section('contenido')
    <br>
    <h3>Crear un nuevo Curso</h3>
    <br>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombreCurso" class="form-label">Nombre del curso</label>
          <input type="text" class="form-control" id="nombreCurso" name="nombreCurso">
        </div>
        <div class="mb-3">
          <label for="descripcionCurso" class="form-label">Descripción del curso</label>
          <input type="text" class="form-control" id="descripcionCurso" name="descripcionCurso">
        </div>
        <div class="mb-3">
            <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
        </div>
        <div class="mb-3">
            <label for="docenteCurso" class="form-label">Nombre del Docente</label>
            <input type="text" class="form-control" id="docenteCurso" name="docenteCurso">
        </div>
        <div class="mb-3">
            <label for="imagenCurso" class="form-label">Imagen del Curso</label>
            <input type="file" class="form-control" id="imagenCurso" name="imagenCurso">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
