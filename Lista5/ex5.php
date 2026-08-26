<?php

$nome = "Carlos";
$nivel_acesso = 3;

if($nivel_acesso == 1){
    echo "Nível de acesso básico";
}
else if($nivel_acesso == 2){
    echo "Nìvel de acesso intermediário";
}
else if($nivel_acesso == 3){
    echo "Nível de acesso avançado";
}
else{
    echo "Acesso inválido!";
}
?>