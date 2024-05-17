@extends('layouts.app')

@section('titulo', 'Estudiante')

@section('contenido')
    <br>
    <h3>Estudiante {{ $estudiante->nombres }}</h3>
    <br>
    <img src="{{ Storage::url($estudiante->foto)}}" alt="" style="height:100px; margin:20px">
    <p>Nombre: {{ $estudiante->nombres }} {{ $estudiante->apellidos }}</p>
    <p>Fecha de Nacimiento: {{ $estudiante->fecha_nacimiento }}</p>
    <p>Documento: {{ $estudiante->documento }}</p>
    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-primary">Editar</a>
    <br><br>

    <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Esto no se puede deshacer, ¿Está segur@?')">Borrar</button>
    </form>

@endsection
