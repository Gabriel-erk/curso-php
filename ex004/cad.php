<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        // variavel superglobal $_GET que traz os dados enviados via URL (ou seja, vai me trazer os dados que foram enviados pelo formulário lá do ex004/index.php quando cliquei em "enviar", pois o action do form está apontando para este arquivo cad.php (este arquivo aqui))
        // na tela será mostrado um array associativo com os dados enviados via URL (ou seja, o campo "nome" e o campo "sobrenome" que foram preenchidos lá no formulário do ex004/index.php)
        $nome = $_GET['nome'] ?? 'Nome não informado';
        $sobrenome = $_GET['sobrenome'] ?? 'Sobrenome não informado';

        echo "<p>É uum prazer te conhecer, <strong>$nome $sobrenome</strong>! Volte sempre ao nosso site!</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>