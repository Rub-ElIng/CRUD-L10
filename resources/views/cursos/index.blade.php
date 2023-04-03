@extends('layouts.plantilla')

@section('title', 'Cursos')


@section('content')


@vite('resources/js/vue/main.js') 


    <div id="cont">
        <div id="cont1" >
          <div id="cont2" >
            <div id="cont3" >
                <h1  >Bienvenido a la pagina principal de Cursos</h1>
                        <br>
                        <table id="tb">
                            <thead>
                              <tr>
                                <th id="tx"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <ul id="list"  ">
                                        @foreach ($cursos as $curso)
                                <li>
                                    <a id="estA"  href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                            </tbody>
                        </table>
                        &nbsp; 
                        <a id="estA1"
                        href="{{ route('cursos.create') }}">Crear Curso</a>
                    </form>
                </div >
                {{ $cursos->links() }}
            </div>
        </div>
    </div>

    

@endsection
