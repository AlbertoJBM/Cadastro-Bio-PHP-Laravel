<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','Cadastro'. $cadastro->nome)
<!-- cambiar el contido para mas de una linea -->
@section('content')
  <h1>Usuário{{$cadastro->nome}}</h1>
  <a href="{{route('cadastros.index')}}">Voltar pra os cadastros</a>
  <p><strong>Profesao</strong> {{$cadastro->profesao}}</p>
  <br>
  <br>
  <p><strong>Resumo</strong> {{$cadastro->resumo}}</p>
    <br>
    <br>
    <br>


  <a href="{{route('welcome.welcome')}}">Inicio</a>
@endsection
