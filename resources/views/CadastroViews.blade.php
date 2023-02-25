
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
    <!--
     ?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
-->


<form  method="POST" action="{{route('cadastro.store')}}">

    @csrf
    <br><br>
       <!-- cpf -->
       <label>cpf: </label>
       <input type="int" name="cpf" placeholder="Digite a cpf"><br><br>

    <!-- nombre -->
    <label>Foto: </label>
    <input type="text" name="foto" placeholder="Digite url da imagen"><br><br>
     <!-- email -->
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Digite o seu nome"><br><br>
    <!-- idade -->
    <label>idade: </label>
    <input type="int" name="idade" placeholder="Digite a Idade"><br><br>
    <!-- profissao -->
    <label>profesao: </label>
    <input type="text" name="profesao" placeholder="Digite a profesao"><br><br>
    <!-- resumen -->
    <label>resumen: </label>
    <input type="text" name="resumo" placeholder="Digite o resumo"><br><br>



    <!-- la forma de hacer un botton  -->
    <input type="submit" value="Cadastrar">
    <input type="submit" value="Lista">
</form>
@endsection
