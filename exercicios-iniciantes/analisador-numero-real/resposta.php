<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Analisador de Número Real</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>

<style>
    body {
        background: #020024;
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
    }
</style>

<body>
    <main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="px-3 py-4 w-50 bg-light rounded-3 shadow">
            <h2 class="fw-bold">Analisador de Número Real</h2>
            <?php

            $numeroUsuario = $_GET['numero'];
            $valor_inteiro = intval($numeroUsuario);
            $valor_decimal = number_format($numeroUsuario - $valor_inteiro, 2, '.', '');

            echo "<p class='mt-3 mb-2 mx-0 p-0 fs-5'>Analisando o número <strong>$numeroUsuario</strong> informado pelo usuário:</p>";
            echo "<ul class='fs-5'>";
            echo "<li>Parte inteira: <strong>$valor_inteiro</strong></li>";
            echo "<li>Parte decimal: <strong>$valor_decimal</strong></li>";
            echo "</ul>";

            ?>
            <p class="btn btn-primary w-100 mt-3"><a href="javascript:history.go(-1)" class="text-white text-decoration-none">Voltar para a página anterior</a></p>
        </div>
    </main>

    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>