@extends('layouts.admin')


@section('content')

    <h1 class="lista-admin" style="margin-top: 2%">Painel Administrativo - Cross 373</h1>
      <p style="font-size: 2em; text-align: center">O que você deseja fazer?</p>
    <div class="container d-flex justify-content-around" style="margin-top: 2%; margin-bottom:2%">

      <!-- Card de opções administrativas -->

        <div class="card p-2 border border-dark" style="width: 18rem;">
            <img class="card-img-top" src="../public/img/iconeCliente.PNG" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Clientes</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>

          <div class="card p-2 border border-dark" style="width: 18rem;">
              <img class="card-img-top" src="../public/img/iconePlano.PNG" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Planos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card p-2 border border-dark" style="width: 18rem;">
                <img class="card-img-top" src="../public/img/iconeProduto.PNG" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Produtos</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card p-2 border border-dark" style="width: 18rem;">
                  <img class="card-img-top" src="../public/img/iconeTema.PNG" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Alterar Tema</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body">
                  <button onclick="trocar()">Trocar Tema</button></a>
                  </div>
                </div>
<!-- Fim dos Cards de opções administrativas -->
</div>
<!-- fim da div container dos cards de opções administrativas -->


  </body>
<script type="text/javascript">
  function trocar() {
    var teste = document.getElementById('teste').href="{{ asset('css/stylealternative.css') }}";
    //teste[3].href = '{{ asset('css/stylealternative.css') }}';
  }
</script>
</html>
    @endsection
