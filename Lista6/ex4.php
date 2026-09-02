<?php

echo "Bem vindo a Place Pizz!! <br>";
echo "Menu <br>";
echo "1 - Pizzas, <br> 2- Hambúrger, <br> 3- Refrigerante, <br> 4 - Sobremesa, <br> 5 - Sair";

$opcao = 3;

switch($opcao){
     case 1: 
        echo "<br> 1 - Pizza de calabresa R$ 40,00 <br> 1 - Pizza Mussarela R$ 40,00 <br> 1 - Pizza de Nutella e morango R$ 50,00 <br>";
        break;
    case 2: 
        echo "<br> 1 - Coca-Cola R$ 8,00 <br> 1 - Guaraná R$ 5,00 <br> 1 - Pepsi R$ 6,00 <br>";
        break;
    case 3: 
        echo "<br> 1 - X-EGG R$ 25,00 <br> 1 - X - TUDO R$ 35,00 <br> 1 - X - kid R$ 12,00 <br>";
      break;
    case 4: 
        echo "<br> 1 - Pudim R$ 3,50 <br> 1 - Sorvete R$ 5,00 <br> 1 - Milkshake R$ 12,00 <br>";
        break;
    case 5:
        echo "<br> Volte sempre!";
        break;
     default:
        echo "<br> Opção inválida!";
         break;
}
   
