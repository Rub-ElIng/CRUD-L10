@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <div id="contenedor">
        <div id="contenedorC">
            <div id="login">
                <div class="titulo">
                    Bienvenido a la pagina principal de cursos
                    <form id="loginform" name="login">

                        <p id="resultado"></p>
                        <a href="{{ route('cursos.create') }}">Crear Curso</a>
                        <ul>
                            @foreach ($cursos as $curso)
                                <li>
                                    <a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        {{ $cursos->links() }}

                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection
