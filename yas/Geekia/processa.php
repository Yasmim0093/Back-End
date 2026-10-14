<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $tipo = $_POST["tipo"];
    $gen = $_POST["genero"];
    $tam = $_POST["tamanho"];
    $obra = "";
    $desc = "";

    //Anime
    if($tipo== "Anime" && $gen== "Ação" && $tam== "Curtas"){
        $obra = "One Punch Man";
        $desc = "Ação, humor e batalha";
    }
    elseif($tipo== "Anime" && $gen== "Ação" && $tam== "Longas"){
        $obra = "Attack on Titan";
        $desc = "Ação, misterio e suspense";
    }
    elseif($tipo== "Anime" && $gen== "Romance" && $tam== "Curtas"){
        $obra = "Tsuki ga Kirei";
        $desc = "Romance brasileiro e momentos fofos";
    }
    elseif($tipo== "Anime" && $gen== "Romance" && $tam== "Longas"){
        $obra = "Your Lie in April";
        $desc = "Romance, música e emoção";
    }
    elseif($tipo== "Anime" && $gen== "Fantasia" && $tam== "Longas"){
        $obra = "Fullmatal Alchemist";
        $desc = "Aventura, magia, muita emoção";
    }
     elseif($tipo== "Anime" && $gen== "Fantasia" && $tam== "Curtas"){
        $obra = "Frieren";
        $desc = "Fantasia, Aventura e boa história";
    }

    //Mangá
    elseif($tipo== "Mangá" && $gen== "Ação" && $tam== "Longas"){
        $obra = "One Piece";
        $desc = "Aventura, Piratas e muitas batalhas";
    }
    elseif($tipo== "Mangá" && $gen== "Ação" && $tam== "Curtas"){
        $obra = "Demon Slayer";
        $desc = "Caçador de demonios";
    }
    elseif($tipo== "Mangá" && $gen== "Romance" && $tam== "Curtas"){
        $obra = "Kaguya-sama";
        $desc = "Romance, comédia e muita confusão";
    }
    elseif($tipo== "Mangá" && $gen== "Romance" && $tam== "Longas"){
        $obra = "Nana";
        $desc = "Romance, amizade e drama";
    }
    elseif($tipo== "Mangá" && $gen== "Fantasia" && $tam== "Curta"){
        $obra = "Death Note";
        $desc = "Mistério, estratégia e sobrenatural";
    }
     elseif($tipo== "Mangá" && $gen== "Fantasia" && $tam== "Longas"){
        $obra = "Berserk";
        $desc = "Fantasia sombria, ação e Aventura";
    }

//Livro
    elseif($tipo== "Livro" && $gen== "Ação" && $tam== "Curta"){
        $obra = "Android sonham com ovelhas";
        $desc = "Ação e Robos com humanos";
    }
    elseif($tipo== "livro" && $gen== "Ação" && $tam== "Curtas"){
        $obra = "As crônicas de Nárnia";
        $desc = "Ação, batalha e avantura";
    }
    elseif($tipo== "Livros" && $gen== "Romance" && $tam== "Curtas"){
        $obra = "O pequeno príncepe";
        $desc = "Uma história de amizade e amor";
    }
    elseif($tipo== "Livros" && $gen== "Romance" && $tam== "Longas"){
        $obra = "Orgulho e preconceito";
        $desc = "Roamnce clássico com personagens marcantes";
    }
    elseif($tipo== "Livros" && $gen== "Fantasia" && $tam== "Curta"){
        $obra = "O Hobbit";
        $desc ="Aventura, fantasia e dragões";
    }
     elseif($tipo== "Livros" && $gen== "Fantasia" && $tam== "Longas"){
        $obra = "Game of thrones";
        $desc = "Fantasia sombria, ação e Aventura";
    }
    else{
        $obra = "Naruto";
        $desc = "Ninja";
    }

}
else{
    header("location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekIA - Especialista Nerd</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <img src="logo.jpg" width="200" alt="GeekIA Logo">
        <h2>recomendação</h2>
        <strong>Obra:</strong>
        <?php echo $obra; ?>
        <br><br>
        <strong>Descrição</strong>
        <?php echo $desc; ?>
    </div>
     <br><br>
     <a href="index.html">Voltar</a>
</body>

</html>