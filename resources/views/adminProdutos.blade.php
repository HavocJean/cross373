@extends('layouts.app')


@section('content')

<h1 class="lista-admin">Lista de Produtos</h1>

<div>
    <table class="tabela-admin" >
        <th>Atualizar</th>
        <th>Deletar</th>
        <th>Nome do Produto</th>
        <th>Descrição do Produto</th>
        <th>Categoria do Produto</th>
        <th>Valor do Produto</th>
        <th>Data de atualização do produto</th>

        @isset($produtos)
            @forelse($produtos as $produto)
            <tr>
                <td><a href="/cross373/public/atualizarproduto/{{ $produto -> idProdutos }}">Update</a></td>
                <td><a href="{{ $produto -> idProdutos }}">Update</a></td>
                <td>{{ $produto -> nomeProdutos}}</td>
                <td>{{ $produto -> descricaoProdutos}}</td>
                <td>{{ $produto -> categoriaProdutos}}</td>
                <td>{{ $produto -> valorProdutos}}</td>
                <td>{{ $produto -> dataUltimaAtualProdutos}}</td>
            
            @empty
            <p>Não há registro de produtos.</p>
            @endforelse
        @endisset
    </table>

</div>




 @endsection