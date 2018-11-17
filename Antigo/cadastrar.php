<?php
    include_once("header.php");
    include_once("ClassClientes.php");

    if($_POST){
      $cliente = new Clientes();
      $cliente->inserirCliente();
    }
?>

    <div class="container-cad offset-lg-3 offset-md-1 offset-sm-1" style="text-align:left;">
        <form action="" method="POST">
            <div class="container-cad">
              <br>
              <h4>Dados</h4>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="cadastro_nome" placeholder="Nome">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSobrenome" name="cadastro_sobrenome" placeholder="Sobrenome">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" name="cadastro_email" placeholder="Ex. jose@gmail.com">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="inputEmail5">Confirmar E-mail</label>
                    <input type="email" class="form-control" id="inputEmail5" name="cadastro_conf_email" placeholder="Ex. jose@gmail.com">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="cadastro_senha">Senha</label>
                    <input type="password" class="form-control" id="cadastro_senha" name="cadastro_senha" placeholder="Senha">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="cadastro_conf_senha">Confirme Senha</label>
                    <input type="password" class="form-control" id="cadastro_conf_senha"
                    name="cadastro_conf_senha"
                    placeholder="Senha">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-3">
                    <label for="inputNasc">Data de Nascimento</label>
                    <input type="" class="form-control" id="inputNasc" data-mask="00/00/0000" name="data_nasc" placeholder="dd/mm/aaaa">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="inputCPF">CPF</label>
                    <input type="text" class="form-control" id="inputCPF" name="cpf_cnpj">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="telefone">Celular</label>
                    <input type="telephone" name="telefone" id="telefone" class="telefone form-control" placeholder="(99) 99999-9999">
                  </div>
                  </div>

                <div class="mensagem" style="color: red"><?php echo isset($_GET['msg'])?$_GET['msg']:''; ?></div>
                <br>
                <button type="submit" class="btn btn-dark btn-primary btn-md" name="cadastrar" value="cadastrar">Cadastrar</button>
                <br>
                <br>
            </div>
        </form>
    </div>
    
  <?php
    include("footer.php");
  ?>
