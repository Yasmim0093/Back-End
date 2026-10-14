<?php

$tamanho = $_POST ['tamanho'];
$refri = $_POST ['refri'];
$sabores = $_POST ['sabores'];

$qtd = count($sabores);

if($tamanho = 'Broto'){
    $total = 45;
} else{
    $total = 65;
}

if($refri =='Coca'){
    $total == $total + 12;
} elseif($refri == 'Guarana'){
    $total = $total + 10;
}

$texto_sabores = implode(',', $sabores);

$msg = "Pedido: Pizza $tamanho ($texto_sabores) + Refri $refri. Total R$ $total";
$numero = "(14) 9963-2457";
$link = "". $numero . "&text=". urldecode($msg)

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <img src="" alt="Logo da Pizzaria">
        <h1>🍕 Confirme seu Pedido!</h1>
        <p>Pizza: <?php echo $tamanho; ?></p>
        <p>Sabores <?php echo $texto_sabores; ?></p>
        <p>Refrigerante <?php echo $refri; ?></p>
        <p><strong>Total: <?php echo $total; ?><strong></p>
        <a href="<php echo $link; ?>" class="btn wsp">
        Pedir no Whatsapp</a>
        <br><br>
        <a class="btn" href="index.html">Voltar</a>
    </div>
</body>
</html>
