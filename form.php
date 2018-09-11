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
    <!-- Menu -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  ">
      <a class="navbar-brand" href="#">CROSS 373</a>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="store.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Store
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Planos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Produtos Fitness</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a class="nav-link" href="#">Cadastre-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <br>
    <br>
      
    <form class="" action="index.html" method="post">
      <fieldset>
        <legend>Cadastro</legend>
              <label for="nome">Nome:</label><br>
              <input type="text" name="nome" value=""><br><br>
              <label for="email">Email:</label><br>
              <input type="email" name="email" value=""><br><br>
              <label for="nascimento">Data Nascimento:</label><br>
              <input type="date" name="nascimento" value=""><br><br>
              <label for="sexo">Sexo:</label><br>
              <select  name="sexo">
                <option value="selecione" selected disabled>Selecione...</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
              </select><br><br>
              <label for="cpf">CPF:</label><br>
              <input type="text" name="cpf" value=""><br><br>
              <label for="estado-civil">Estado Civil:</label><br>
              <select  name="estado-civil">
                <option value="selecione" selected disabled>Selecione...</option>
                <option value="solteiro">Solteiro(a)</option>
                <option value="casado">Casado(a)</option>
                <option value="viuvo">Viuvo(a)</option>
                <option value="separado">Separado(a)</option>
                <option value="divorciado">Divorciado(a)</option>
              </select><br><br>
              <label for="rg">RG:</label><br>
              <input type="text" name="rg" value=""><br><br>
              <label for="profissao">Profissão:</label><br>
              <input type="text" name="profissao" value=""><br><br>
              <label for="nome-responsavel">Nome Responsável:</label><br>
              <input type="text" name="nome-responsavel" value=""><br><br>
              <label for="cpf-responsavel">CPF Responsável:</label><br>
              <input type="text" name="cpf-responsavel" value=""><br><br>
              <label for="fone-responsavel">Fone Responsável:</label><br>
              <input type="text" name="fone-responsavel" value=""><br><br>
              <label for="profissao-responsavel">Profissão Responsavel:</label><br>
              <input type="text" name="´profissao-responsavel" value=""><br><br>
              <h2>DADOS DE EMERGÊNCIA</h2>
              <label for="contato-emergencia">Contato de Emergência:</label><br>
              <input type="text" name="contato-emergencia" value=""><br><br>
              <label for="telefone-emergencia">Telefone de Emergência:</label><br>
              <input type="text" name="telefone-emergencia" value=""><br><br>
              <label for="celular-emergencia">Celular de Emergência:</label><br>
              <input type="text" name="celular-emergencia" value=""><br><br>
              <label for="obs">Observações:</label><br>
              <textarea name="obs" rows="8" cols="80"></textarea><br><br>
              <h2>CONTATO</h2>
              <select name="contato">
                <option value="selecione" selected disabled>Selecione...</option>
                <option value="celular">Celular</option>
                <option value="telefone-residencial">Telefone Residencial</option>
                <option value="telefone-comercial">Telefone Comercial</option>
                <option value="facebook">Facebook</option>
                <option value="nextel">Nextel</option>
                <option value="skype">Skype</option>
                <option value="twitter">Twitter</option>
              </select><br><br>
              <h2>ENDEREÇO</h2>
              <label for="tipo">Tipo:</label><br>
              <select name="tipo">
                <option value="selecione" selected disabled>Selecione...</option>
                <option value="residencial">Residencial</option>
                <option value="comercial">Comercial</option>
              </select><br><br>
              <label for="cep">CEP:</label><br>
              <input type="text" name="cep" value=""><br><br>
              <label for="endereco">Endereço:</label><br>
              <input type="text" name="endereco" value=""><br><br>
              <label for="numero">Numero:</label><br>
              <input type="text" name="numero" value=""><br><br>
              <label for="complemento">Complemento:</label><br>
              <input type="text" name="complemento" value=""><br><br>
              <label for="bairro">Bairro:</label><br>
              <input type="text" name="bairro" value=""><br><br>
              <label for="cidade">Cidade:</label><br>
              <input type="text" name="cidade" value=""><br><br>
              <label for="uf">UF:</label><br>
              <select name="uf">
                <option value="selecione" selected disabled>Selecione...</option>
                <option value="acre">AC</option>
                <option value="alagoas">AL</option>
                <option value="amazonas">AM</option>
                <option value="amapa">AP</option>
                <option value="bahia">BA</option>
                <option value="ceara">CE</option>
                <option value="df">DF</option>
                <option value="espirito-santo">ES</option>
                <option value="goias">GO</option>
                <option value="maranhao">MA</option>
                <option value="mato-grosso">MT</option>
                <option value="mato-grosso-sul">MS</option>
                <option value="minas">MG</option>
                <option value="para">PA</option>
                <option value="paraiba">PB</option>
                <option value="parana">PR</option>
                <option value="pernambuco">PE</option>
                <option value="piaui">PI</option>
                <option value="rio-janeiro">RJ</option>
                <option value="rio-grande-norte">RN</option>
                <option value="rio-grande-sul">RS</option>
                <option value="rondonia">RO</option>
                <option value="roraima">RR</option>
                <option value="santa-catarina">SC</option>
                <option value="sao-paulo">SP</option>
                <option value="sergipe">SE</option>
                <option value="tocantins">TO</option>
              </select><br><br>
              <h2>INFORMAÇÕES ADICIONAIS</h2>
              <label for="tipo-visita">Tipo da Visita:</label><br>
              <select name="">
                <option value="selecione" selected disabled>Selecione...</option>
              </select><br><br>
              <label for="modalidades">Modalidades/Interesses:</label><br>
              <select name="">
                <option value="selecione" selected disabled>Selecione...</option>
              </select><br><br>
              <label for="nivel-interesse">Nivel de interesse:</label><br>
              <select name="">
                <option value="selecione" selected disabled>Selecione...</option>
              </select><br><br>
              <label for="como-conheceu">Como conheceu:</label><br>
              <select name="">
                <option value="selecione" selected disabled>Selecione...</option>
              </select><br><br>
              <label for="objetivo">Objetivo principal:</label><br>
              <select name="">
                <option value="selecione" selected disabled>Selecione...</option>
              </select><br><br>
              <label for="avalicao">Availiação DISC:</label><br>
              <select name="">
                <option value="selecione" selected disabled>Selecione...</option>
              </select><br><br>
              <label for="observacao">Observação:</label><br>
              <textarea name="observacao" rows="8" cols="80"></textarea><br><br>
              <input type="submit" name="" value="Enviar">
        </fieldset>
      </form>

      <footer class="container-fluid" style="margin-top:20px">
          <div class="newsletter row">
            <div class="textonews col-lg-5">
                <p>Inscreva-se na nossa newsletter!</p>
            </div>

            <div class="col-lg-7">
              <form action="">
                <div class="camposnewsletter">
                  <input type="text" placeholder="Name" name="name" required>
                  <input type="text" placeholder="Email address" name="mail" required>
                  <input class="btn btn-outline-light" type="submit" value="Inscreva-se">
                </div>
              </form>
            </div>
            </div>

            <div class="social">

              <img class="socialicon" src="img/instagram.png" alt="email para o cross373" width="40">
              <img class="socialicon" src="img/facebook.png" alt="email para o cross373" width="35">
              <img src="img/email.png" alt="email para o cross373" width="50">
            </div>
            <hr>
            <br>
            <div class="contatos">
              <div class="row">
                <div class="col-lg-6">
                  <button class="btn btn-danger" type="button" name="button">Agendar Free Pass </button>
                </div>
                <div class="col-lg-6">
                  <button class="btn btn-danger" type="button" name="button">Entre em Contato</button>
                </div>

              </div>
            </div>
            <hr>
            <br>
            <p>Telefone: (11) xxxxx-xxxx</p>
            <p>Endereço: Av. Nossa Sra. da Encarnação, 373. Jardim Maria Estela</p>
            <br>
            <hr>
            <br>


      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14620.619127815446!2d-46.5999536!3d-23.6346273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90450a21241cce54!2sAcademia+Nishida+Nata%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1536523586941" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
      </footer>


          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
