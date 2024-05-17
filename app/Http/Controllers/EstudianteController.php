<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

   public function store(Request $request)
    {
        $est = new Estudiante();
        $est->nombres = $request->input('nombresEstudiante');
        $est->apellidos = $request->input('apellidosEstudiante');
        $est->fecha_nacimiento = $request->input('fechaNacimiento');
        $est->documento = $request->input('idEstudiante');

        if ($request->hasFile('fotoEstudiante')) {
            $est->foto = $request->file('fotoEstudiante')->store('public/estudiantes');
        }

        $est->save();

        return to_route('estudiantes.index');
    }

    public function show(Estudiante $estudiante)
    {
         return view('estudiantes.show')->with('estudiante', $estudiante);
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit')->with('estudiante', $estudiante);
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->update([
            'nombres' => $request->nombresEstudiante,
            'apellidos' => $request->apellidosEstudiante,
            'fecha_nacimiento' => $request->fechaNacimiento,
            'documento' => $request->idEstudiante
        ]);

        if ($request->hasfile('fotoEstudiante')) {
            Storage::disk('')->delete($estudiante->foto);
            $estudiante->foto = $request->file('fotoEstudiante')->store('public/estudiantes');
            $estudiante->save();
        }

        return to_route('estudiantes.show', $estudiante);
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return to_route('estudiantes.index');
    }
}
