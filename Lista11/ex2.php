<?php

$valor = $_POST ["valor"];
$dinheiro = $_POST ["dim"];

if($dinheiro < $valor){
    echo "Pobre";
}
else{
    echo "Seu troco é: ", $dinheiro - $valor;
}


echo "O número é: ",  $dinheiro - $valor; 

?> 
