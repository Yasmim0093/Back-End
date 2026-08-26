<?php

$peso = 50;
$altura = 1.60;
$resultado = $peso / ($altura*$altura);

echo "Seu IMC é $resultado <br> ";


if($resultado >= 19 && $resultado <= 24){
    echo "Peso ideal";
}
else if($resultado >= 25 || $resultado <= 29){
    echo "Sobrepeso";
}
else if($resultado >= 30 || $resultado <= 34){
    echo "Obesidade grau 1";
}
else if($resultado >= 35 || $resultado <= 39){
    echo "Obesidade grau 2";
}
else if($resultado >= 40){
    echo "Obesidade grau 3";
}
else{
    echo "algo de errado";
}
?>