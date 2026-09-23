<?php

$quilos = $_POST ['quilos'];

if($quilos >= 50){
        echo "Você deve pagar uma multa de: ", "R$", ($quilos - 50) * 4;
}else{
        echo "Você não deve nenhuma multa";
}

?>