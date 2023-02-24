
<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','Home')
<!-- cambiar el contido para mas de una linea -->
@section('content')
  <h1>CadastrarOlimpo Usuário</h1>
@endsection

		<!--
         ?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
    -->
