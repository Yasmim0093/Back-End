<?php

$Idade = 45;
$deficiencia = false;
$gestante = false;

if($Idade >= 60 || $deficiencia == true || $gestante == true ){
    echo "Atendimento prioritário!";
}
else{
   echo "Atendimeto normal";
}