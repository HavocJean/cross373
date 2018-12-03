<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Produto as Produto;
use \App\User;

class FunctionController extends Controller
{

public function mostrarProdutos(){
  $produtos = Produto::All();
  return view('adminProdutos', array('produtos' => $produtos));
}


public function cadastrarProduto(Request $r) {
  if ($r->isMethod('get')) {
    return view('cadastrarProduto');
  }
  $novo_produto = new Produto;

  $novo_produto->nomeProdutos = $r->input('nomeProdutos');
  $novo_produto->descricaoProdutos = $r->input('descricaoProdutos');
  $novo_produto->categoriaProdutos = $r->input('categoriaProdutos');
  $novo_produto->valorProdutos = $r->input('valorProdutos');
  $novo_produto->imagemProdutos = $r->input('imagemProdutos');
  $novo_produto->dataUltimaAtualProdutos = date('Y-m-d H:i:s');

  if ($novo_produto->save()) {
    return view('cadastrarProduto',
    array('msg' => 'Produto gravado com sucesso'));
  } else {
    return view('cadastrarProduto',
    array('msg' => 'Erro na gravação do produto'));
  }
}


public function atualizarProduto($id,Request $r) {
  if ($r->isMethod('get')) {
    $produto = Produto::find($id);
    return view('atualizarProduto', array('produto' => $produto));
  }
  $produto = Produto::find($id);

  $produto->nomeProdutos = $r->input('nomeProdutos');
  $produto->descricaoProdutos = $r->input('descricaoProdutos');
  $produto->categoriaProdutos = $r->input('categoriaProdutos');
  $produto->valorProdutos = $r->input('valorProdutos');
  $produto->imagemProdutos = $r->input('imagemProdutos');
  $produto->dataUltimaAtualProdutos = date('Y-m-d H:i:s');

  if ($produto->save()) {
    return view('atualizarProduto',
    array('msg' => 'Produto atualizado com sucesso', 'produto' => $produto));
  } else {
    return view('atualizarProduto',
    array('msg' => 'Erro na atualização do produto', 'produto' => $produto));
  }
}

}
