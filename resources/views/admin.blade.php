<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cross 373</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" id="teste">

</head>
  <body>

      <!-- Menu com logo e login / register -->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <img src="../public/img/logo-cross373-fav.jpeg" alt="" class="navbar-brand" width="100"/>
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    Cross 373
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                          <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/cross373/public/">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="http://localhost/cross373/public/#sobre">Sobre</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="http://localhost/cross373/public/#horarios">Horários</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="http://localhost/cross373/public/contato">Contato</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="http://localhost/cross373/public/store">Planos</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="http://localhost/cross373/public/store">Produtos Fitness</a>
                            </div>
                          </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <h1 class="lista-admin" style="margin-top: 2%">Painel Administrativo - Cross 373</h1>
      <p style="font-size: 2em; text-align: center">O que você deseja fazer?</p>
    <div class="container d-flex justify-content-around" style="margin-top: 2%">

      <!-- Card de opções administrativas -->

        <div class="card p-2 border border-dark" style="width: 18rem;">
            <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
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
              <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
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
                <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
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
                  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
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
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link"><button onclick="trocar()">Trocar Tema</button></a>
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
