<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos= curso::paginate();

        //return redirect()->route('cursos.index',compact('cursos'));

        return view('cursos.index',compact('cursos'));
    }
    public function create(){
        return view('cursos.create') ;
    }
    public function show($id){

        $curso = curso::find($id);


        return view('cursos.show',['curso'=> $curso]) ;
    }
}
