@extends('layouts.app')

@section('content')
<h1>Lista de Mensagem</h1>
<hr>

 <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($mensagens as $mensagem)
	<p><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->title}}</a></p>
	<p>{{$mensagem->texto}}</p>
   @auth<p>Ações:
  <a href="/mensagens/{{$mensagem->id}}">Ver Mais </a>
  <a href="/mensagens/{{$mensagem->id}}/edit">Editar </a>
  <a href="/mensagens/{{$mensagem->id}}/delete">Deletar</a>
  </p>
  <br>
  @endauth
@endforeach

@auth
  <a href="/mensagens/create">Criar Novo Registro </a>
@endauth
@endsection
