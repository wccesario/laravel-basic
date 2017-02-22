<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Auth;
use Request;

class LoginController extends Controller {

	public function login() {

		return view('login');
		
	}

	public function autentica(){

		$credenciais = Request::only('email', 'password');

		if(Auth::attempt($credenciais)){
			
			return redirect()->action('ProdutoController@lista');

		} else {

			return redirect()->action('LoginController@login');
		
		}
	}
 	
 	public function logout() {

 		Auth::logout();

 		return redirect()->action('LoginController@login');
 	}

}
