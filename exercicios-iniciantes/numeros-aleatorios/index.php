<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Exercício Antecessor e Sucessor</title>
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
            <h2 class="fw-bold">Trabalhando com números aleatórios</h2>
            <?php
            // gera um número aleatório entre 1 e 100
            $numero = rand(1, 100);
            
            echo "<p class='m-0 p-0'>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p class='m-0 p-0'>Número sorteado: <strong>$numero</strong></p>";
            ?>
            <p class="btn btn-primary w-100 mb-0 mt-3"><a href="javascript:location.reload()" class="text-white text-decoration-none">Atualizar</a></p>

        </div>
    </main>

    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>