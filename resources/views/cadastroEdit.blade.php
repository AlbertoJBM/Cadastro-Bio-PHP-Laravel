<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','Cadastro Edit')
<!-- cambiar el contido para mas de una linea -->
@section('content')

    <h1>Editar o Usuário</h1>



<form  method="POST" action="{{route('cadastros.update',$cadastro)}}" enctype="multipart/form-data">

    @csrf
    @method('put')
    <br><br>
       <!-- cpf -->
       <label>cpf: <br>
       <input type="int" name="cpf" value="{{$cadastro->cpf}}"><br><br>
    </label>
    <!-- nombre -->
    <label>Foto: </label><br>
    <input type="file" name="foto" value="{{$cadastro->foto}}"><br><br>
     <!-- email -->
    <label>Nome: </label><br>
    <input type="text" name="nome" value="{{$cadastro->nome}}"><br><br>
    <!-- idade -->
    <label>idade: </label><br>
    <input type="int" name="idade" value="{{$cadastro->idade}}"><br><br>
    <!-- profissao -->
    <label>profesao: </label><br>
    <input type="text" name="profesao" value="{{$cadastro->profesao}}""><br><br>
    <!-- resumen -->
    <!--
    <label>resumen:
        <br>
    <input type="text" name="resumo" rows="5"  placeholder="Digite o resumo"><br><br>
        </label>

    -->
    <label>resumen:
        <br>
    <textarea type="text" name="resumo" rows="5">{{$cadastro->resumo}}</textarea><br><br>
        </label>



    <!-- la forma de hacer un botton  -->
    <input type="submit" value="Editar Cadastro">

</form>
<input type="submit" value="Lista">

<br>
<br>
<br>


<a href="{{route('welcome.welcome')}}">Inicio</a>
@endsection
