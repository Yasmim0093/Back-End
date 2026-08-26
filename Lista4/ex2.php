<?php

$idade = 65;
$nome = "sr.joão";
$desconto = false;

if($idade >= 60 || $desconto == true){
    echo "$nome tem desconto!";
}
else{
    echo "Nenhum desconto aplicado!";
}

?>