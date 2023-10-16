<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando dados do formulário retroalimentado
        $value1 = $_GET["v1"] ?? 0;
        $value2 = $_GET["v2"] ?? 0;
    ?>
    <header>
    </header>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$value1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$value2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php
            $soma = $value1 + $value2;
            echo "<p>A soma de $value1 + $value2 é <strong>igual a $soma.</strong></p>";
        ?>
    </section>
</body>
</html>