<?php

echo "Caixa Eletrônico - Itaú <br>";
echo "1 - Consulte seu saldo disponível, 2 - Fazer Saque, 3 - Fazer depósito, 4 - Ver Extrato, 5 - Sair br>";

$opcao = 3;
$saque = 654.7;
$deposito = 5.00;

switch(opcao){
     case 1:
        echo "Seu saldo disponível é: R$ 654,87";
        break;
    case 2:
        echo "Qual valor você que sacar?";
        break;
    if($saque <= 654.7){
        echo "Saque realizado!";
    }
else{
    echo "Quantidade indisponível";
     break;
}
    case 3: 
        echo "Qual valor a ser depositado?";
     break;
     if($deposit < 5){
        echo "Só pode ser depositado valores acima de 5 reais";
     }
else {
    echo "Valor depositado com sucesso!";
}
  case 4: 
    echo "extrato - depositou: $deposito Saque: $saque";
  break;
  case 5:
    echo "Sair";
}
  

