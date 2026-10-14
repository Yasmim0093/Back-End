<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $tipo = $_POST["tipo"];
    $gen = $_POST["gen"];
    $tam = $_POST["tam"];
    $obra = "";
    $desc = "";

    //Brasil
    if($tipo== "Brasil" && $gen== "Natureza" && $tam== "uma"){
        $obra = "Cataratas do Iguaçu - Foz do Iguaçu, Paraná  ✈️";
        $desc = "Natureza, Vista inesquecíve e perfeito para contemplar com calma! ";
    }
    elseif($tipo== "Brasil" && $gen== "Natureza" && $tam== "quatro"){
        $obra = " Bonito - Mato Grosso do Sul ✈️ ";
        $desc = "É a capital brasileira do ecoturismo, famosa por seus rios de águas cristalinas, grutas milenares e rica vida silvestre!";
    }
    elseif($tipo== "Brasil" && $gen== "Natureza" && $tam== "duas"){
        $obra = "Lençóis Maranhenses - Maranhão";
        $desc = "Um lugar perfeito para contemplar a natureza e se divertir com o parceiro(a)!";
    }
    elseif($tipo== "Brasil" && $gen== "Compras" && $tam== "uma"){
        $obra = "Embu das Artes - SP";
        $desc = "Lugar perfeito para ir as compras e visualizar a beleza da arte!";
    }
    elseif($tipo== "Brasil" && $gen== "Compras" && $tam== "duas"){
        $obra = "Gramados - Rio Grande Do Sul ";
        $desc = " O clima serrano e aconchegante é perfeito para caminhar de mãos dadas enquanto provam fondue e compram lembranças locais.";
    }
     elseif($tipo== "Brasil" && $gen== "Compras" && $tam== "quatro"){
        $obra = "Brusque e Região - Santa Catarina";
        $desc = "Conhecida como a capital da confecção no estado de Santa Catarina, Brusque atrai turistas do país inteiro focados em compras de vestuário no atacado e varejo.";
    }
     elseif($tipo== "Brasil" && $gen== "Diversão" && $tam== "uma"){
        $obra = "Beach Park - CE";
        $desc = "Perfeita para se divertir sem preocupações!";
    }
    elseif($tipo== "Brasil" && $gen== "Diversão" && $tam== "duas"){
        $obra = "Beto Carrero  - SC";
        $desc = "Quer ir se divertir com seu amigo, namorado ou familiar? Beto carreiro é a melhor opção, promete diversão o tempo todo.";
    }
     elseif($tipo== "Brasil" && $gen== "Diversão" && $tam== "quatro"){
        $obra = "Hopi Hari  - SP";
        $desc = "Diversão em grupo e garantida no Hopi Hari! com grandes brinquedos e atrações ao longo do park.";
    }

    //França
    elseif($tipo== "França" && $gen== "Natureza" && $tam== "uma"){
        $obra = " Mont Blanc -  Departamento da Alta Saboia ";
        $desc = "Neve e Bela vista natural, perfeito para contemplar calmamente e relaxar.";
    }
    elseif($tipo== "França" && $gen== "Natureza" && $tam== "duas"){
        $obra = "Les Gorges du Verdon - Provence ";
        $desc = " De junho a agosto para aproveitar o sol e nadar, ou maio e setembro para evitar grandes multidões.";
    }
    elseif($tipo== "França" && $gen== "Natureza" && $tam== "quatro"){
        $obra = "Falésias de Étretat";
        $desc = "Famosas por seus arcos naturais e pela agulha rochosa esculpida pelo vento e pelo mar";
    }
    elseif($tipo== "França" && $gen== "Compras" && $tam== "uma"){
        $obra = "Galeries Lafayette Paris Haussmann";
        $desc = "um dos maiores ícones de Paris, combinando uma experiência de compras de luxo com uma arquitetura histórica espetacular.";
    }
    elseif($tipo== "França" && $gen== "Compras" && $tam== "duas"){
        $obra = "Le Bon Marché Rive Gauche - Paris";
        $desc = " É amplamente reconhecido como a primeira grande loja de departamentos do mundo";
    }
     elseif($tipo== "França" && $gen== "Compras" && $tam== "quatro"){
        $obra = "La Vallée Village - Paris";
        $desc = "Um outlet a céu aberto localizado a cerca de 40 minutos de Paris (próximo à Disneyland Paris), ideal para grupos que buscam marcas de luxo e grifes.";
    }
    elseif($tipo== "França" && $gen== "Diversão" && $tam== "um"){
        $obra = "Disneyland Paris - Paris";
        $desc = "Um lugar mágico e perfeito para se divertir e se encantar com o mundo Disney!";
    }
    elseif($tipo== "França" && $gen== "Diversão" && $tam== "duas"){
        $obra = "Torre Eiffel - Paris";
        $desc = "Lugar encantador para os casais e amigos apaixonados, com a vista perfeita para uma linda torre!";
    }
    elseif($tipo== "França" && $gen== "Diversão" && $tam== "duas"){
        $obra = "Parc de la Villette - Paris";
        $desc = "Se destaca por ser um dos complexos culturais e arquitetônicos mais modernos e vibrantes da cidade";
    }


//Japão
    elseif($tipo== "Japão" && $gen== "Natureza" && $tam== "um"){
        $obra = "Monte Fuji - Ilha de Honshu";
        $desc = "É a montanha mais alta do Japão, com 3.776 metros de altitude, e fica localizado na ilha de Honshu.";
    }
    elseif($tipo== "Japão" && $gen== "Natureza" && $tam== "duas"){
        $obra = "Desfiladeiro de takachiho - província de Miyazaki ";
        $desc = "Lugar perfeito para andar de bote com seu companheiro ou amigo!";
    }
    elseif($tipo== "Japão" && $gen== "Natureza" && $tam== "quatro"){
        $obra = " Montanhas vulcânicas, lagos (como o Lago Chuzenji), cachoeiras famosas (como a Cachoeira Kegon) e fontes termais (onsens). -  Kanto";
        $desc = "Uma história de amizade e amor";
    }
    elseif($tipo== "Japão" && $gen== "Compras" && $tam== "uma"){
        $obra = "Akihabara - Tokyo";
        $desc = "O paraíso dos eletrônicos, videogames, animes e cultura pop. Visite a famosa loja gigante Yodobashi Camera.";
    }
    elseif($tipo== "Japão" && $gen== "Compras" && $tam== "duas"){
        $obra = "Ginza - Tokyo";
        $desc ="Distrito de luxo mais famoso de Tóquio, conhecido mundialmente por suas lojas de grife, alta gastronomia e arquitetura moderna.";
    }
     elseif($tipo== "Japão" && $gen== "Compras" && $tam== "quatro"){
        $obra = "distritos vibrantes de Shibuya - Shibuya";
        $desc = "È um dos distritos mais vibrantes, enérgicos e multifacetados de Tóquio";
    }
     elseif($tipo== "Japão" && $gen== "Diversão" && $tam== "um"){
        $obra = "Tokyo - DisneySea";
        $desc = "Parque exclusivo com temática náutica e portos inspirados em contos do mar.";
    }
    elseif($tipo== "Japão" && $gen== "Diversão" && $tam== "duas"){
        $obra = "Universal Studios Japan - tokyo";
        $desc = " Abriga a famosa área interativa Super Nintendo World™ e o mundo de Harry Potter.";
    }
    elseif($tipo== "Japão" && $gen== "Diversão" && $tam== "quatro"){
        $obra = "Fuji-Q Highland - tokyo";
        $desc = " Focado em adrenalina, possui montanhas-russas recordistas mundiais em velocidade e inclinação, além de vistas incríveis do Monte Fuji.";
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
    <link rel="stylesheet" href="WordT.css">
</head>

<body>

    <div class="container">

        <img src="word.png" width="200" alt="GeekIA Logo">
        <h2>recomendação</h2>
        <strong>Lugar:</strong>
        <?php echo $obra; ?>
        <br><br>
        <strong>Descrição:</strong>
        <?php echo $desc; ?>
    </div>
     <br><br>
     <a href="WordT.html">Voltar</a>
</body>

</html>