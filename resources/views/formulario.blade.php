@extends('templade_formulario')
@section('formulario_de_cadastro')

  <form name="form" action="{{route('cadastrado.cadastro_inserido')}}" method="post">
  @csrf 
  Nome: <input type="text" name="nome">
   <br><br>
   Nome de Usuario: <input type="text" name="usuario">

    <br><br>
      <input type="submit" name="up" value="Cadastrar">


   </form>
@endsection