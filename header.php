<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cross 373</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <a class="navbar-brand" href="index.php">CROSS 373</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#horarios">Horários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Planos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="store.php">Produtos Fitness</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a class="nav-link" href="cadastrar.php">Cadastre-se</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
            <div class="dropdown-menu">
              <form class="px-4 py-3" action="acoes.php" method="post">
                <div class="form-group">
                  <label for="login_email">Email</label>
                  <input type="email" class="form-control" id="login_email" placeholder="e-mail@exemplo.com" name="login_header">
                </div>
                <div class="form-group">
                  <label for="login_senha">Senha</label>
                  <input type="password" class="form-control" id="login_senha" placeholder="Senha" name="login_header">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck" style="margin:0 0 3% 0;">Salvar dados</label>
                </div>
                <button type="submit" class="btn btn-dark btn-block" name="login_header" value="login">Entrar</button>
              <div class="dropdown-divider"></div>
              <button type="submit" class="btn btn-outline-dark btn-block" name="login_header" value="esqueci_senha">Esqueci minha senha</button>
              <a class="btn btn-outline-secondary btn-block" href="cadastrar.php">Cliente novo? Cadastrar</a>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div style="margin-top:60px;"></div>