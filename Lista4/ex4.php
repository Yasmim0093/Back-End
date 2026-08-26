<?php
$email = "emailzinho123@gmail.com" &&
$senha = "senhazinha123";
$ativo = true;
echo "  Login - Facebook <br>";

if($email == "emailzinho123@gmail.com" && $senha == "senhazinha123" && $ativo == true){
    echo "Login autorizado!";
 }
else{
    echo "Usuario ou senha invalidos";
}
?>