
<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','Home')
<!-- cambiar el contido para mas de una linea -->
@section('content')
  <h1>CadastrarOlimpo Usuário</h1>
  <a href="{{route('cadastros.create')}}">Crear Cadastro</a>

    <ul>
       {{--{{$cadastros}} --}}
@foreach ($cadastros as $cadastro)
    <li>

        {{$cadastro->nome}}

        {{-- <a href="{{route('cadastro.show', $cadastr->nome)}}">{{$cadastr->nome}}</a> --}}
         {{--  route('cadastros.list', $cadastr->nome)--}}
        {{--$cadastr->nome--}}

    </li>
@endforeach
    </ul>

    {{--$cadastro->links()--}}

@endsection


