@extends('layouts.app')


@section('content')
<div id= "todoproduto" class="container-fluid" style="padding-top:50px;text-align:left">
    <div class="container">
    <h4>{{ $produto -> nomeProdutos }}</h4>
        <div class="row">
            <div class="col-lg-5">
                <div class="mainphoto">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:400px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" class="d-block w-100" src="..." alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="../../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" class="d-block w-100" src="..." alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="../../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" class="d-block w-100" src="..." alt="Third slide">
                            </div>
                    </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
                    </div>
                </div>

                <div class="photo_item">
                    <img src="../../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" />
                    <img src="../../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" />
                    <img src="../../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" />
                </div>
            </div>
            <div class="col-lg-7" style="padding-top:10px;">
                <h5 style="margin-bottom:0px;">Nome Produto: <b>{{ $produto -> nomeProdutos }}</b></h5>
                <small>Marca Produto: <b>{{ $produto -> categoriaProdutos }}</b></small><br/>
                <p>Descriçao:
                {{ $produto -> descricaoProdutos }}</p>
                Preço: <span>R$ {{ $produto -> valorProdutos }}</span><br/>

                <form class="form-inline" style="padding-top:20px;">
                    <div class="form-group">
                        <label for="calcular" style="margin-left:0px;padding-right:10px;">Calcular frete</label>
                        <input type="text" class="form-control" id="calcular" placeholder="______-__" style="width:160px;">
                    </div>
                    <button type="submit" class="btn btn-dark">Ok</button>
                </form>

                <button type="submit" class="btn btn-dark" style="width:180px;margin-top:25px;margin-left:0px;">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>

    <div class="container" style="padding: 30px 0;">
    <h3>Especificação do produto </h3>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Nome do produto</td>
                <td>{{ $produto -> nomeProdutos }}</td>
            </tr>
            <tr>
                <td>Categoria do produto</td>
                <td>{{ $produto -> categoriaProdutos }}</td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td>{{ $produto -> descricaoProdutos }}</td>
            </tr>
            <tr>
                <td>Valor do Produto</td>
                <td>R$ {{ $produto -> valorProdutos }}</td>
            </tr>

        </tbody>
    </table>
    </div>
</div>
@endsection
