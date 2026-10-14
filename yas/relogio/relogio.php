<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relógio Digital</title>

    <style>
        body {
            background-color: #222;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #relogio {
            font-size: 70px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div id="relogio">00:00:00</div>

    <script>
        function atualizarRelogio() {
            let agora = new Date();

            let horas = agora.getHours();
            let minutos = agora.getMinutes();
            let segundos = agora.getSeconds();

            horas = String(horas).padStart(2, "0");
            minutos = String(minutos).padStart(2, "0");
            segundos = String(segundos).padStart(2, "0");

            document.getElementById("relogio").textContent =
                horas + ":" + minutos + ":" + segundos;
        }

        atualizarRelogio();

        setInterval(atualizarRelogio, 1000);
    </script>

</body>
</html>