<?php


Route::get('/', function() {
	return "<h2>All around the world</h2>";
});


Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/produtos/altera/{id}', 'ProdutoController@altera');

Route::post('/produtos/update', 'ProdutoController@update');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/login', 'LoginController@login');

Route::post('/login/autentica', 'LoginController@autentica');

Route::get('/login/logout', 'LoginController@logout');

