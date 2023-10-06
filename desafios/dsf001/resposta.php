<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <p>
        <?php
            $num = $_REQUEST["numero"] ?? 0;
            echo "O número escolhido foi <strong>" . $num . "</strong>!";
            echo "<br>Seu <em>antecessor</em> é <strong>" . $num - 1 . "</strong>";
            echo "<br>Seu <em>sucessor</em> é <strong>" . $num + 1 . "</strong>";
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>