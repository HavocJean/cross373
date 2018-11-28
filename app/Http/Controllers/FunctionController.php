<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Produto as Produto;
use \App\User;

class FunctionController extends Controller
{
public function cadastrarProduto(Request $r) {
  if ($r->isMethod('get')) {
    return view('cadastrarProduto');
  }
  $novo_produto = new Produto;

  $novo_produto->nomeProdutos = $r->input('nomeProdutos');
  $novo_produto->descricaoProdutos = $r->input('descricaoProdutos');
  $novo_produto->categoriaProdutos = $r->input('categoriaProdutos');
  $novo_produto->valorProdutos = $r->input('valorProdutos');
  $novo_produto->dataUltimaAtualProdutos = $r->input('dataUltimaAtualProdutos');
  $novo_produto->save();

  return view('cadastrarProduto', ['msg' => 'Produto gravado com sucesso'])

}
}
