@extends('layouts.app')


@section('content')

<!-- Banner -->
      <div class="bannerstore">
        <div class="bannerbg">

            <h2 id="titulobanner"><hr>Escolha seu Plano agora!<hr></h2>

      </div>
    </div>
  <!-- Fim do Banner -->
<div class="galeria container-fluid">
  <div class="row">
        <div class="menustore rounded col-lg-2" >
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar.." style="width:80%;margin-left:10%;margin-top:10px;margin-bottom:10px;">
                      <button class="btn btn-outline-light my-2 my-sm-0" style="width:50%; margin: auto;" type="submit">Buscar</button>
                    </form>
                    <div class="titulomenu">
                      <br>
                      <p> <strong>PLANOS DISPONÍVEIS</strong> </p>
                      <br>
                      <hr>
                    </div>
                    <ul class="listamenu">
                      <li>CrossTraining</li>
                      <li><hr></li>
                      <li>Planos de Crédito</li>
                      <li><hr></li>
                      <li>Planos Mensais</li>
                      <li><hr></li>
                      <li>Planos Semestrais</li>
                      <li><hr></li>
                      <li>Planos Recorrentes</li>
                      <li><hr></li>
                    </ul>
                </div>
    
        <div class="container-produtos col-lg-10">
                <div class="row" style="margin: 0 auto;">
                  @isset($produtos)
                    @forelse($produtos as $produto)
                      <div class="card">
                        <img class="card-img-top rounded img-thumbnail" src="{{ $produto -> caminhoImagemProdutos }}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title">{{ $produto -> nomeProdutos }}</h4>
                              <p class="card-text">{{ $produto -> descricaoProdutos }}</p>
                            </div>
                        </div>
                  @empty
                  <p>não há registro de produtos</p>
                  @endforelse
                  @endisset
                        
                  </div>
          </div>
  </div>
        <!-- Menu lateral -->

  
  </div>
    @endsection
