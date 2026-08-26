<?php

echo "Bem vindo(a) a HakiBet <br>";
echo "O jogo é simples: Acerte o número e seu valor de saldo triplica";

$aposta = 10;
$numero_escolhido = 5;

if($numero_escolhido == $numero_escolhido+1){
    echo "Você ganhou!";
}
else{
    echo "Quase lá... Seu número: $numero_escolhido <br>";
    echo "numero sorteado:", $numero_escolhido + 1;
}