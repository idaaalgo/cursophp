<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <?php
        echo "5 + 2 / 2 = " . 5 + 2 / 2 . "<br>";
        // Tabela ordem de precedência
        // ()
        // **
        // * | / | %
        // + | -
        echo "50 / 2 + 3<sup>2</sup> = " . 50 / 2 + 3 ** 2 . "<br>";
        echo "50 / (2 + 3)<sup>2</sup> = " . 50 / (2 + 3) ** 2;
    ?>
</body>
</html>