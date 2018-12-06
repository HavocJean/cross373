<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
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

public function storeProdutos(){
  $produtos = Produto::All();
  return view('store', array('produtos' => $produtos));
}


public function cadastrarProduto(Request $r) {
  if ($r->isMethod('get')) {
    return view('cadastrarProduto');
  }
  $nameFile = null;
  if ($r->image) {
    $novo_produto = new Produto;

    // Define um aleatório para o arquivo baseado no timestamps atual
    $name = uniqid(date('HisYmd'));
    // Recupera a extensão do arquivo
    $extension = $r->image->extension();
    // Define finalmente o nome
    $nameFile = "{$name}.{$extension}";

    // Faz o upload
    //$upload = $r->image->storeAs('img', $nameFile);
    /*$r->file('image')->move(
      base_path().'/public/img/'
    );*/
    $novo_produto->nomeProdutos = $r->input('nomeProdutos');
    $novo_produto->descricaoProdutos = $r->input('descricaoProdutos');
    $novo_produto->categoriaProdutos = $r->input('categoriaProdutos');
    $novo_produto->valorProdutos = $r->input('valorProdutos');
    //$novo_produto->caminhoImagemProdutos = $r->input('caminhoImagemProdutos');
    //$imagem = $r->image->store('categories', $nameFile);
    $novo_produto->caminhoImagemProdutos = $r->image->storeAs('img', $nameFile);
    $novo_produto->dataUltimaAtualProdutos = date('Y-m-d H:i:s');

    if ($novo_produto->save()) {
      return view('cadastrarProduto',
      array('msg' => 'Produto gravado com sucesso'));
    } else {
      return view('cadastrarProduto',
      array('msg' => 'Erro na gravação do produto'));
    }
  }
}


public function atualizarProduto($id,Request $r) {
  if ($r->isMethod('get')) {
    $produto = Produto::find($id);
    return view('atualizarProduto', array('produto' => $produto));
  }

  $nameFile = null;

  if ($r->image) {

  $produto = Produto::find($id);
  // Define um aleatório para o arquivo baseado no timestamps atual
  $name = uniqid(date('HisYmd'));
  // Recupera a extensão do arquivo
  $extension = $r->image->extension();
  // Define finalmente o nome
  $nameFile = "{$name}.{$extension}";

  $produto->nomeProdutos = $r->input('nomeProdutos');
  $produto->descricaoProdutos = $r->input('descricaoProdutos');
  $produto->categoriaProdutos = $r->input('categoriaProdutos');
  $produto->valorProdutos = $r->input('valorProdutos');
  $produto->caminhoImagemProdutos = $r->image->storeAs('img', $nameFile);
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

public function deletarProduto($id) {
  $produto = Produto::find($id);
  if(empty($produto)) {
    return view('adminProdutos', array('msg' => 'Registro não encontrado'));
  } else {
    $produto->delete();
    return view('adminProdutos', array('msg'=> 'Registro deletado com sucesso'));
  }
}


}
