@extends('principal')

@section('conteudo')

<center><h2>Controle de estoque</h2></center>

@if(old('nome'))

	<div class="alert alert-success">
		Produto {{old('nome')}} adicionado com sucesso
	</div>

@endif

<table class="table">
	@foreach($produtos as $p)
		<tr class="{{$p->quantidade <= 1 ? 'danger' : ''}}">
			<td>{{ $p->nome }}</td>
			<td>{{ $p->descricao }}</td>
			<td>{{ $p->valor }}</td>
			<td>{{ $p->quantidade }}</td>
			<td>{{ $p->tamanho }}</td>
			<td>{{ $p->categoria->nome }}</td>
			<td><a href="/produtos/mostra/{{$p->id}}">
		       	<span class="glyphicon glyphicon-search"></span>
		    	</a>
		    </td>
		    <td> 
			    <a href="{{action('ProdutoController@altera', $p->id)}}"> 
			      <span class="glyphicon glyphicon-pencil"></span>
			    </a>
		    </td>
		    <td> 
			    <a href="{{action('ProdutoController@remove', $p->id)}}"> 
			      <span class="glyphicon glyphicon-trash"></span>
			    </a>
		    </td>
		</tr>
	@endforeach

</table>
@stop

@section('jquery')

<script type="text/javascript">
	
	$(document).ready(function(){
		
		$.ajax({
			url:'/produtos/json',
			method: "GET",
			dataType:"JSON",
			success: function(result){
				console.log(result);
			}

		});
	

	});

</script>

@stop