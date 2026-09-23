<?php

$email= $_POST["email"];
$senha= $_POST["senha"];

if($email == "Y.vieira@gmail.com" && $senha == "y1209"){
        echo "Login, bem sucedido!!";
}else{
    echo "Login ou senha invalido!!!";
}
?>