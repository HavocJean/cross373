<?php
session_start();
$arquivo = 'dados.json';

//Função de cadastro

function cadastro($user) {
  global $arquivo;
  if($user['cadastro_senha']!=$user['cadastro_conf_senha']){
    return [
      'error'=>true,
      'id'=>false,
      'msg'=> "As senhas não conferem!"
    ];
  }
  if(file_exists($arquivo)){
    $dados = json_decode(file_get_contents($arquivo), true);
  }else{
    $dados = ["usuarios"=>[]];
  }

  foreach ($dados['usuarios'] as $id => $usuario) {
    if ($user['cadastro_email'] == $usuario['cadastro_conf_email']) {
      return [
        'error'=>true,
        'id'=>$id,
        'msg'=> "Usuário já cadastrado!"
      ];
    }
  }
  $id = count($dados['usuarios']);
  unset($user['cadastro_conf_senha']);
  $user['cadastro_senha'] = password_hash($user['cadastro_senha'], PASSWORD_DEFAULT);
  $dados['usuarios'][] = $user;
  file_put_contents($arquivo, json_encode($dados));
  return [
    'error'=>false,
    'id'=>$id,
    'msg'=> "Usuário cadastrado com sucesso!"
  ];
}




function login($login, $senha){
  global $arquivo;
  if(file_exists($arquivo)){
    $dados = json_decode(file_get_contents($arquivo), true);
  }else{
    $dados = ["usuarios"=>[]];
  }

  foreach ($dados['usuarios'] as $id => $usuario) {
    if ($login == $usuario['cadastro_email'] && password_verify($senha, $usuario['cadastro_senha'])) {
      $_SESSION['usuario'] = $usuario;
      $_SESSION['usuario']['id'] = $id;
      return true;
    }
  }
  return false;
}

function is_logged(){
  return isset($_SESSION['usuario']);
}

function get_user(){
  return isset($_SESSION['usuario'])?$_SESSION['usuario']:false;
}

function logout(){
  session_destroy();
}


  ?>
