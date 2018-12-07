@extends('layouts.app')


@section('content')
<div class="container-fluid carrinho">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-lg-8">
                <h4>Carrinho de compra</h4>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">produto</th>
                            <th scope="col">qtd</th>
                            <th scope="col">preço</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($cart as $k => $v)

                        <tr>
                            <td><img src="../public/img/cross1.jpg" style="width:80px;"><span style="padding-left:10px;">  {{ $v['nomeProdutos']}}</span></td>
                            <td>  {{ $v['quantidadeProdutos']}}</td>
                            <td>  {{ $v['valorProdutos']}}</td>
                            

                        </tr>
                          @endforeach
                    </tbody>
                </table>
                        <form class="form-inline" style="padding-top:20px;">
                            <div class="form-group">
                                <label for="calcular" style="margin-left:0px;padding-right:10px;">Calcular frete</label>
                                <input type="text" class="form-control" id="calcular" placeholder="______-__" style="width:160px;">
                            </div>
                            <button type="submit" class="btn btn-dark">Ok</button>
                        </form>
            </div>
            <div class="col-lg-4">
                <div class="caixacarrinho">
                    <h4> resumo do pedido </h4>
                    <div class="row">
                        <div class="col-6">subotal</div>
                        <div class="col-6">R$ 250,00</div>
                    </div>
                    <div class="row" style="border-bottom:1px solid #CCC;">
                        <div class="col-6">frete</div>
                        <div class="col-6" style="margin-bottom:10px;">-</div>
                    </div>
                    <div class="row" style="font-weight:bold;padding-top:5px;font-size:18px;">
                        <div class="col-6">total</div>
                        <div class="col-6">R$ 350,00</div>
                    </div>
                    <div class="row" style="border-bottom:1px solid #CCC;">
                        <div class="col-6"></div>
                        <div class="col-6" style="margin-bottom:10px;">em até 6x s/ juros</div>
                    </div>
                    <div class="row botaocarrinho">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark">Finalizar Pedido</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
