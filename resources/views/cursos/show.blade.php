@extends('layouts.plantilla')

@section('title','Curso'.$curso)

@section('content')
<h1>Bienvenido al cursos {{$curso->name}} </h1>
<a href="{{ route('cursos.index') }}">Volver a cursose</a>
<p><strong>Categoria:</strong>{{$curso->categoria}}</p>
<p><strong>Categoria:</strong>{{$curso->description}}</p>
@stop
