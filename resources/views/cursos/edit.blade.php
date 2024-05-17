@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')
    <br>
    <h3>Editar Curso {{ $curso->nombre }}</h3>
    <br>
    <form action="{{ route('cursos.update', $curso) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nombreCurso" class="form-label">Nombre del curso</label>
          <input type="text" class="form-control" id="nombreCurso" name="nombreCurso" value="{{ $curso->nombre }}">
        </div>
        <div class="mb-3">
          <label for="descripcionCurso" class="form-label">Descripción del curso</label>
          <input type="text" class="form-control" id="descripcionCurso" name="descripcionCurso" value="{{ $curso->descripcion }}">
        </div>
        <div class="mb-3">
            <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="{{ $curso->fecha_inicio }}">
        </div>
        <div class="mb-3">
            <label for="docenteCurso" class="form-label">Docente</label>
            <input type="text" class="form-control" id="docenteCurso" name="docenteCurso" value="{{ $curso->docente }}">
        </div>
        <div class="mb-3">
            <label for="imagenCurso" class="form-label">Imagen del Curso</label>
            <input type="file" class="form-control" id="imagenCurso" name="imagenCurso">
        </div>
        <button type="submit" class="btn btn-warning">Editar Curso</button>
    </form>
@endsection
