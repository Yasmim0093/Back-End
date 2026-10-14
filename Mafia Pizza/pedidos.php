<?php
$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$borda = $_POST['borda'];
$sabores = $_POST['sabores'];
$cupom = $_POST['cupom'];

$qtd = count($sabores);

if ($tamanho == 'Broto') {
    $total = 55;
} else {
    $total = 65;
}

if ($borda == 'Catupiry') {
    $total = $total + 10;
} elseif ($borda == 'Requeijão'){
    $total = $total + 7;
} elseif ($borda == 'Chocolate') {
    $total = $total + 15;
}

if ($refri == 'Coca 2L') {
    $total = $total + 12;
}
elseif ($refri == 'Guaraná 2L') {
    $total = $total + 10;
} elseif ($refri == 'Pepsi 2L') {
    $total = $total + 10;
}
elseif ($refri == 'Coca lata') {
    $total = $total + 5;
}

if($cupom == 'CUPOM10' ){
    $total = $total - 10;
}

$texto_sabores = implode(', ', $sabores);

$msg = "Pedido: Pizza $tamanho ($texto_sabores) + Refri $refri. Total: R$ $total,00";
$link = "https://api.whatsapp.com/send?text=" . urlencode($msg);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
            <h1>Confirme seu pedido!</h1>
            <p><strong>Pizza:</strong> <?php echo $tamanho; ?></p>
            <p><strong>Sabores:</strong> <?php echo $texto_sabores; ?></p>
            <p><strong>Refri:</strong> <?php echo $refri; ?></p>
            <h2>Total: R$ <?php echo $total; ?>,00</h2>

            <a href="<?php echo $link; ?>" target="_blank" class="btn wsp">📲 Pedir no WhatsApp</a>

        <a href="index.html" class="btn">Voltar</a>
    </div>
</body>
</html>




