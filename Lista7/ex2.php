<?php


function analisarVendas($produto, $custo, $venda){
    $lucro = $venda - $custo;

    if($lucro <= 0){
        $mensagem = "Prejuizo!!";
    }
elseif($lucro <= 20){
    $mensagem = "lucro baixo! mas vale a pena";
}
else{
    $mensagem = "Lucro alto! Investe!!!!";
}
echo "produto:, $produto <br>";
echo "Lucro:, $lucro <br>";
echo "Analise:, $mensagem <br>";

analistavendas("camisa", 40,35);
}
