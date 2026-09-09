<?php

$musicas = ["Blinding Lights", "Shape of You", "Sweater Weather", "Starboy", "As It Was", "Skyfall" ];

echo "Músicas na sua Playlist<br>";
foreach ($musicas as $num){
    echo "$num <br>";
}
$qtd = count ($musicas);

echo "<br>Quantidade de Músicas: ", $qtd; 

?>