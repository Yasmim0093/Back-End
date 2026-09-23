<<?php

$nome = $_POSTS ["nome"];
$horas = $_POSTS ["horas"];

$horasAno = $horas * 365;
$anos = $horasAno / 24 / 365;

echo "Olá $nome <br><br>";
echo "Você passa aproximadamente $horasAnos horas por ano <br>";
echo "Isso representa aproximadamente $anos da sua vida";
?>