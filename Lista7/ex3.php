<?php

function calcularDesconto($preco, $desconto){
    $valordesconto = $preco * $desconto / 100;
    return $preco - $valordesconto;
}

echo "preço final: R$", calcularDesconto(100,10);