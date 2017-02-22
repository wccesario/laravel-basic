<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

	public function __construct(){

		$this->middleware('auth', 
        ['only' => ['adiciona', 'remove']]);

	}

	public function lista(){

        $produtos = Produto::all();

        return view('produtos')->with('produtos', $produtos);

	}

	public function mostra(){

	  $id = Request::Route('id');
    
  	  $resposta = Produto::find($id);

	  if(empty($resposta)) {
	  
	    return "Esse produto não existe";
	  
	  }

	  return view('detalhes')->with('p', $resposta);

	}

	public function novo() {

		return view('formulario')->with('categorias', Categoria::all());

	}

	public function adiciona(ProdutoRequest $request) {

		Produto::create($request->all());

		return redirect()->action('ProdutoController@lista')->withInput();

	}

	public function remove($id) {
		
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@lista');
		
	}

	public function altera($id){

		$produto = Produto::find($id);

		return view('alterar')->with('produto', $produto);


	}

	public function update(){

		$params = Request::all();

		$id = Request::input('id');

		$produto = Produto::find($id);

		$produto->update($params);

		return redirect()->action('ProdutoController@lista');

	}

	public function listaJson(){

	    $produtos = Produto::all();
	
	    return response()->json($produtos);
	
	}

}