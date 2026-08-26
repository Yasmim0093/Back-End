<?php

$n1 = 10;
$n2 = 5;
$operacao = "Multiplicação";

if($operacao == "Soma"){
    echo "A soma é: ", $n1 + $n2;
}
else if($operacao == "Subtração"){
    echo "A subtração é: ", $n1 - $n2;
}
else if($operacao == "Multiplicação"){
    echo "A multiplicação é: ", $n1*$n2;
}
else if($operacao == "Divisão"){
    echo "A divisão é: ", $n1/$n2;
}
else{
    echo "Operação inválida!";
}
?>