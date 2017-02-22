<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nome' => 'required|min:3',
			'valor' => 'required|numeric',
			'descricao' => 'required|max:200'
		];
	}

	public function messages() {
		return [
			'required' => 'O campo :attribute é obrigatorio',
		];
	}

}
