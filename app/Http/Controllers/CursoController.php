<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        //return redirect()->route('cursos.index',compact('cursos'));

        //return view('cursos.index', compact('cursos'));

        // return response()->json($cursos);
        return $cursos;
        
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function store(Request $request)
    {
        //return $request->all();
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        // return view('cursos.show', compact('curso'));
        return $curso;
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        // $curso->name = $request->name;
        // $curso->description = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        // //$curso->update($request->all());

        // return redirect()->route('cursos.show', $curso);
        $curso->update($request->all());
        
    }

    public function destroy(Curso $curso)
    {

        $curso->delete();
        

        //return redirect()->route('cursos.index');
    }
}
