<?php


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