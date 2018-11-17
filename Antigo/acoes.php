<?php

include_once("funcoes.php");

if (isset($_REQUEST['acao'])) {

switch ($_REQUEST['acao']) {
  case 'login':
    if(login($_POST['login_email'], $_POST['login_senha'])){
      header('Location:index.php');
    }else{
      header('Location:index.php?msg=Usuário+não+encontrado+ou senha+inválida!');
    }
    break;

  case 'cadastro':
    unset($_POST['acao']);
    $cad = cadastro($_POST);
    if($cad['error']){
      header('Location:cadastrar.php?msg='.$cad['msg']);
    }else{
      header('Location:index.php?msg='.$cad['msg']);
    }
    break;

  case 'logout':
    logout();
    header('Location:index.php');
    break;

  default:
    echo "";
    break;
} }


?>
