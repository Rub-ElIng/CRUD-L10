@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" >
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
          <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
                <h1 class="block uppercase tracking-wide text-white font-bold mb-2 text-3xl" >Bienvenido a la pagina principal de Cursos</h1>
                        <br>
                        <table class="table-auto">
                            <thead>
                              <tr>
                                <th class="text-1xl">CURSO</th>
                                <!--<th class="text-1xl">ELIMINAR</th>-->
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <ul class="list-disc ">
                                        @foreach ($cursos as $curso)
                                <li>
                                    <a class="bg-orange-500 text-white px-4 py-2  tracking-wider" href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <!--<td>
                        <a class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                        href="">
                        Eliminar
                       </a>
                    </td>-->
                </tr>
                            </tbody>
                        </table>
                        &nbsp; 
                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        href="{{ route('cursos.create') }}">Crear Curso</a>
                    </form>
                </div>
                {{ $cursos->links() }}
            </div>
        </div>
    </div>

    

@endsection
