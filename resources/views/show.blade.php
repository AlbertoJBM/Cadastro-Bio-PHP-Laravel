<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','Cadastro'. $cadastro->nome)
<!-- cambiar el contido para mas de una linea -->
@section('content')
  <h1>Usuário {{$cadastro->nome}}</h1>
  <a href="{{route('cadastros.index')}}">Voltar pra os cadastros</a>
  <br>
  <a href="{{route('cadastros.edit',$cadastro)}}">Editar o Cadastro</a>
  <br>
  <p><strong>Foto  </strong></p>
  <body>
    <img  src="http://localhost/prueba/public{{$cadastro->foto}}" style="width: 200px">
  </body>
  <br>
  <p><strong>CPF  </strong> {{$cadastro->cpf}}</p>
  <br>
  <p><strong>Foto  </strong></p>

  <p><strong>Foto  </strong> {{$cadastro->foto}}</p>
  <br>
  <p><strong>Nome  </strong> {{$cadastro->nome}}</p>
  <br>
  <p><strong>Idade  </strong> {{$cadastro->idade}}</p>
  <br>
  <br>
  <p><strong>Prefesao  </strong> {{$cadastro->profesao}}</p>
    <br>
    <p><strong>Resumo  </strong><br> {{$cadastro->resumo}}</p>
  <br>
    <br>
    <br>

    <form action="{{route('cadastros.destroy', $cadastro)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
  <a href="{{route('welcome.welcome')}}">Inicio</a>
@endsection
