<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Analisador de número real</h1>
        <p>
            <?php
                $num = $_POST["numero"] ?? 0;
                $parteInteira = (int) $num;
                $parteDecimal = $num - $parteInteira;
                echo "Analisando o número <strong>" . number_format($num, 3, ',', '.') . "</strong> informado pelo usuário:";
                echo "<ul><li>A parte inteira do número é <strong>" . number_format($parteInteira, 0, ',', '.') . "</strong></li>";
                echo "<li>A parte fracionária do número é <strong>" . number_format($parteDecimal, 3, ',', '.') . "</strong></li></ul>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar para a página anterior</button>
    </main>
</body>
</html>