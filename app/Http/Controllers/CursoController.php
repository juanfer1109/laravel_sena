<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->input('nombreCurso');
        $curso->descripcion = $request->input('descripcionCurso');
        $curso->fecha_inicio = $request->input('fechaInicio');
        $curso->docente = $request->input('docenteCurso');

        if ($request->hasFile('imagenCurso')) {
            $curso->imagen = $request->file('imagenCurso')->store('public/cursos');
        }

        $curso->save();

        return to_route('cursos.index');

    }

    public function show(Curso $curso)
    {
        return view('cursos.show')->with('curso', $curso);
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit')->with('curso', $curso);
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update([
            'nombre' => $request->nombreCurso,
            'descripcion' => $request->descripcionCurso,
            'fecha_inicio' => $request->fechaInicio,
            'docente' => $request->docenteCurso
        ]);

        if ($request->hasfile('imagenCurso')) {
            Storage::disk('')->delete($curso->imagen);
            $curso->imagen = $request->file('imagenCurso')->store('public/cursos');
            $curso->save();
        }



        return to_route('cursos.show', $curso);
    }

     public function destroy(Curso $curso)
    {
        $curso->delete();

        return to_route('cursos.index');
    }
}
