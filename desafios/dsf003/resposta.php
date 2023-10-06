<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <p>
            <?php
                $real = $_REQUEST["reais"] ?? 0;
                $cotacao = 4.88;
                $dolares = $real / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong>";
                echo "<br><strong>Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "USD") . "</strong> informada diretamente no código";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar para a página anterior</button>
    </main>
</body>
</html>