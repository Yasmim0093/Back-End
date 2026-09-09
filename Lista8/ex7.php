<?php

$senhacorreta = "1234";
$senha = "1111";
$tentativa = 0;

while ($tentativa < 3){
    echo "Tentativa", 
     $tentativa + 1, ": Senha Incorreta! <br>",
     $tentativa = $tentativa + 1;
}

echo "Acesso Bloqueado!";