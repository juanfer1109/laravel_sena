@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
    <br>
    <h3>{{ $curso->nombre }}</h3>
    <br>
    <img src="{{ Storage::url($curso->imagen)}}" alt="" style="height:100px; margin:20px">
    <p>Descripción: {{ $curso->descripcion }}</p>
    <p>Fecha de Inicio: {{ $curso->fecha_inicio }}</p>
    <p>Docente: {{ $curso->docente }}</p>
    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-primary">Editar</a>
    <br><br>

    <form action="{{ route('cursos.destroy', $curso) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Esto no se puede deshacer, ¿Está segur@?')">Borrar</button>
    </form>

@endsection
