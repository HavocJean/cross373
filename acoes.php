<?php

include_once("funcoes.php");

switch ($_POST["envio_login"]) {
    case "login":
        # code...
        break;
    case "cadastre_se":
        # code
        break;
    case "esqueci_senha":
        # code
        break;
    default:
        echo "Nome e/ou senha incorretos!";
        break;
}




?>