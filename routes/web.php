<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/store', 'FunctionController@storeProdutos');

Route::get('/storeplanos', 'FunctionController@storePlanos');

Route::get('/produto/{id}', 'FunctionController@escolherProduto');

Route::get('/addtocart', 'FunctionController@adicionarcarrinhosessao')->name('adicionarcarrinho');
Route::post('/addtocart', 'FunctionController@adicionarcarrinhosessao')->name('adicionarcarrinho');

Route::get('/carrinho', 'FunctionController@pegarcarrinho');
Route::post('/carrinho', 'FunctionController@pegarcarrinho');

Route::get('/deletarprodutocarrinho/{id}', 'FunctionController@deletarprodutocarrinho')->name('deletarprodutocarrinho');
Route::post('/deletarprodutocarrinho/{id}', 'FunctionController@deletarprodutocarrinho')->name('deletarprodutocarrinho');

Route::get('/deletasessao', 'FunctionController@deletaSessao');

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/update', function () {
    return view('register2');
});

Route::get('/admin', function () {
    return view('admin');
});


  Route::get('/admin/cadastrarproduto', 'FunctionController@cadastrarProduto')->name('cadastrarProduto');
  Route::post('/admin/cadastrarproduto', 'FunctionController@cadastrarProduto')->name('cadastrarProduto');

  Route::get('/admin/cadastrarplano', 'FunctionController@cadastrarPlano')->name('cadastrarPlano');
  Route::post('/admin/cadastrarplano', 'FunctionController@cadastrarPlano')->name('cadastrarPlano');

  Route::get('/admin/produtos', 'FunctionController@mostrarProdutos')->name('mostrarProdutos');

  Route::get('/admin/atualizarproduto/{id}', 'FunctionController@atualizarProduto');
  Route::post('/admin/atualizarproduto/{id}', 'FunctionController@atualizarProduto');

  Route::get('/admin/deletarproduto/{id}', 'FunctionController@deletarProduto');
  Route::post('/admin/deletarproduto/{id}', 'FunctionController@deletarProduto');
