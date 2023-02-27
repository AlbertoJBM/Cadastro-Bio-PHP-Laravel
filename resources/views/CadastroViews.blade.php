
<!-- llamando a la clase persona-->

    <!--
 /*
-->
    <!--

    -->
<!-- llamando a la clase persona-->

<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','CAD -CadastrarOlimpo')
<!-- cambiar el contido para mas de una linea -->
@section('content')

    <h1>CadastrarOlimpo Usuário</h1>



<form  method="POST" action="{{route('cadastros.store')}}" enctype="multipart/form-data">

    @csrf
    <br><br>
       <!-- cpf -->
       <label>cpf: </label><br>
       <input type="int" name="cpf" placeholder="Digite a cpf"><br><br>

    <!-- nombre -->
    <label>Foto: </label><br>
    <input type="file" name="foto" placeholder="Digite url da imagen" accept="image/*"><br><br>
            @error('file')
                <small class= text-danger>   Texto de error   </small>
            @enderror
     <!-- email -->
    <label>Nome: </label><br>
    <input type="text" name="nome" placeholder="Digite o seu nome"><br><br>
    <!-- idade -->
    <label>idade: </label><br>
    <input type="int" name="idade" placeholder="Digite a Idade"><br><br>
    <!-- profissao -->
    <label>profesao: </label><br>
    <input type="text" name="profesao" placeholder="Digite a profesao"><br><br>
    <!-- resumen -->
    <!--
    <label>resumen:
        <br>
    <input type="text" name="resumo" rows="5"  placeholder="Digite o resumo"><br><br>
        </label>

    -->
    <label>resumen:
        <br>
    <textarea type="text" name="resumo" rows="5"  placeholder="Digite o resumo"></textarea><br><br>
        </label>



    <!-- la forma de hacer un botton  -->
    <input type="submit" value="Cadastrar">

</form>
<input type="submit" value="Lista">

<br>
<br>
<br>


<a href="{{route('welcome.welcome')}}">Inicio</a>
@endsection
