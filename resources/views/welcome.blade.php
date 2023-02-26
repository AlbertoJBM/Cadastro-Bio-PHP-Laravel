


<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','CAD -CadastrarOlimpo')
<!-- cambiar el contido para mas de una linea -->
@section('content')

    <h1>CadastrarOlimpo Usuário</h1>
    <h2>pagina de inicio</h2>
    <h3>texto de test</h3>

    <a href="{{route('cadastros.create')}}">Crear Cadastro</a>
    <br>
    <!--
    <a href="  /*route('cadastros.index')*/  ">Olhar Cadastros</a>
    -->
    <a href="{{route('cadastros.index')}}">Olhar Cadastros</a>
    @endsection




