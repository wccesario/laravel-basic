@extends('principal')

@section('conteudo')

<form action="/produtos/update" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>Nome:</label>
		<input type="text" name="nome" class="form-control" value="{{$produto->nome}}" />
	</div>
	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{$produto->valor}}" />
	</div>
	<div class="form-group">
		<label>Quantidade:</label>
		<input type="text" name="quantidade" class="form-control" value="{{$produto->quantidade}}" />
	</div>
	<div class="form-group">
		<label>Tamanho:</label>
		<input type="text" name="tamanho" class="form-control" value="{{$produto->tamanho}}" />
	</div>
	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{$produto->descricao}}" />
	</div>

	<input type="hidden" name="id" value="{{$produto->id}}">
	<button class="btn btn-primary" type="submit">Editar</button>


</form>

@stop