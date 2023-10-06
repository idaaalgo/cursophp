<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
                $min = 0;
                $max = 100;
                echo "Gerando um número aleatório entre $min e $max...";
                echo "<br>O valor gerado foi <strong>" . mt_rand($min, $max) . "</strong>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro Número</button>
    </main>
</body>
</html>