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

Route::get('/produto/{id}', 'FunctionController@escolherProduto');

Route::get('/addtocart', 'FunctionController@adicionarcarrinhosessao')->name('adicionarcarrinho');
Route::post('/addtocart', 'FunctionController@adicionarcarrinhosessao')->name('adicionarcarrinho');

Route::get('/carrinho', 'FunctionController@pegarcarrinho');

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/update', function () {
    return view('register2');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/deleta', 'FunctionController@deleta');

Route::prefix('/admin')->name('admin')->group(function () {
  Route::get('/cadastrarproduto', 'FunctionController@cadastrarProduto');
  Route::post('/cadastrarproduto', 'FunctionController@cadastrarProduto');
  Route::get('/produtos', 'FunctionController@mostrarProdutos');

  Route::get('/atualizarproduto/{id}', 'FunctionController@atualizarProduto');
  Route::post('/atualizarproduto/{id}', 'FunctionController@atualizarProduto');

  Route::get('/deletarproduto/{id}', 'FunctionController@deletarProduto');
  Route::post('/deletarproduto/{id}', 'FunctionController@deletarProduto');

});
