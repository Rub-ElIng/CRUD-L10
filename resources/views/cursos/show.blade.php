@extends('layouts.plantilla')

@section('title','Curso'.$curso)

@section('content')

<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" >
  <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <h1 class="block uppercase tracking-wide text-white font-bold mb-2 text-3xl" >
        Bienvenido al curso " {{$curso->name}} "
      </h1>
      <br>
      &nbsp;
      <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
           href="{{ route('cursos.index') }}">
           Volver a los Cursos
      </a>
      <div class="mb-8 flex flex-col items-center">
      &nbsp;  
<div class="flex flex-wrap -mx-3 mb-6">
<div class="w-full px-3">
<label 
for="des"
class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
>Descripcion:
</label>
    <br>
    <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" 
    id="des"
    name="descripcion"
    rows="5"
    disabled>{{$curso->description}}
</textarea>
<p class="text-gray-600 text-xs italic">Ingresa la descripcion del curso</p>
</div>
</div>
<br>
<div class="flex flex-wrap -mx-3 mb-6">
<div class="w-full px-3">
<label 
for="cat"
class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
>Categoria:
</label>
    <br>
    <input 
    type="text"
    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
    id="cat" 
    name="categoria" 
    placeholder="Ingresa la categoria"
    value="{{$curso->categoria}}"
    disabled>
</div>
</div>
<br>
<form action="{{route('cursos.destroy',$curso)}}" method="POST">
  @csrf
  @method('delete')
  <button type="submit" 
  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" 
  >Eliminar</button>
</form>
    </div>
    <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
      href="{{ route('cursos.edit',$curso) }}">
      Editar curso
    </a>
    </div>
  </div>
</div>
@stop
