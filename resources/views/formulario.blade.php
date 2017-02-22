@extends('principal')


@section('conteudo')

@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		    <ul>
		    	<li>{{ $error }}</li>
		    </ul>
		@endforeach
	</div>
@endif

<form action="/produtos/adiciona" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>Nome:</label>
		<input type="text" name="nome" class="form-control" value="{{old('nome')}}" />
	</div>
	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{old('valor')}}" />
	</div>
	<div class="form-group">
		<label>Quantidade:</label>
		<input type="text" name="quantidade" class="form-control" value="{{old('quantidade')}}" />
	</div>
	<div class="form-group">
		<label>Tamanho:</label>
		<input type="text" name="tamanho" class="form-control" value="{{old('tamanho')}}"/>
	</div>
	<div class="form-group">
		<label>Categoria:</label>
		<select name="categoria" class="form-control"/>
		@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->nome}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{old('descricao')}}" />
	</div>
	<button class="btn btn-primary" type="submit">Cadastrar</button>


</form>

@stop