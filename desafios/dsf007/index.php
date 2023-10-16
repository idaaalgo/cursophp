<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $minimo = 1380.00;
        $salario = $_GET['salario'] ?? $minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" step="0.01" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$<?=$minimo?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $numDeSalariosMinimos = intdiv($salario, 1380.00);
            $resto = $salario % $minimo;
            echo "<p>Quem recebe um salário de R$". number_format($salario, 2, ",", ".") . " ganha <strong>$numDeSalariosMinimos salários mínimos</strong> + R$ " . number_format($resto, 2, ",", ".") . ".</p>";
        ?>
    </section>
</body>
</html>