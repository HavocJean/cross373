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

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/update', function () {
    return view('register2');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/cadastrarproduto', 'FunctionController@cadastrarProduto');
Route::post('/admin/cadastrarproduto', 'FunctionController@cadastrarProduto');

Route::get('/admin/admin-produtos', 'FunctionController@mostrarProdutos');

Route::get('/admin/atualizarproduto/{id}', 'FunctionController@atualizarProduto');
Route::post('/admin/atualizarproduto/{id}', 'FunctionController@atualizarProduto');
