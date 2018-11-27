@extends('layouts.app')


@section('content')

<div class="container-fluid" style="margin-top:100px;text-align:left">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="mainphoto">
                    <img src="img/galeria1.jpg" />
                </div>
                <div class="photo_item">
                    <img src="img/galeria1.jpg" />
                    <img src="img/galeria1.jpg" />
                    <img src="img/galeria1.jpg" />
                </div>
            </div>
            <div class="col-lg-7">
                <h5 style="margin-bottom:0px;">Nome Produto:</h5>
                <small>Marca Produto:</small><br/>
                <p>Descriçao</p>
                Preço: <span> R$ 999, 99</span><br/>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin: 30px 0;">
            <div class="col-lg-12">
                <h3>ESPECIFICAO DO ITEM</h3>
                <strong>Nome</strong>: infos<br/>
                <strong>Outras Info:</strong> +infos<br/>
                <strong>Ficha Técnica:</strong> infos<br/>
            </div>
        </div>
    </div>
</div>

    @endsection
