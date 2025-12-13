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
            <h2 class="fw-bold">Conversor de Moedas v2.0</h2>
            <?php

            $numeroUsuario = $_GET['numero'];
            // URL da API do Banco Central do Brasil para obter a cotação do dólar
            // &\$top=100&\$format=json, este trecho da api está com contra barra para escapar o caractere $ que é especial no php, e pelo fato de estar em aspsas duplas, o php tentaria interpretar o $top e $format como variáveis, mas não são, então coloco a contra barra para escapar este caractere e a api funcionar corretamente
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='12-11-2025'&@dataFinalCotacao='12-13-2025'&\$top=100&\$format=json"; 
            // Obtendo os dados da API
            $json = file_get_contents($url);
            // Convertendo os dados JSON em um array associativo
            $dados = json_decode($json, true);
            // dados, ou seja os dias das cotações estao dentro de $dados['value'], pegando o primeiro elemento (primeiro dia) caso escrito da forma ao lado
            $cotacao_dia_atual = end($dados['value']); // pegando o ultimo elemento (cotação mais recente), pois na api configurei para retornar a cotação de mais de um dia (entre 12-11-2025 e 12-13-2025, e a que quero é a mais recente, logo, quero a última posição do array)
            // Pegando o valor da cotação de compra do dólar, pois acima eu apenas peguei o array completo do dia, que possui várias informações como a cotaçaõ de venda, compra, data, etc, e eu só quero o valor da cotação de compra
            $valor_cotacao = $cotacao_dia_atual['cotacaoCompra'];

            $valor_em_dolar = number_format($numeroUsuario / $valor_cotacao, 2, ',', '.');
            echo "<p class='mt-3 mb-2 mx-0 p-0 fs-5'>Seus R$ $numeroUsuario equivalem a <strong>US$ $valor_em_dolar</strong></p>";

            echo "<span>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil.</strong></span>";
            ?>
            <p class="btn btn-primary w-100 mt-3"><a href="javascript:history.go(-1)" class="text-white text-decoration-none">Voltar para a página anterior</a></p>
        </div>
    </main>

    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>