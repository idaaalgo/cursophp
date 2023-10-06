<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    <?php
        $r1 = "2" + "2";
        var_dump($r1);
        echo "<br>";

        $r2 = "2" . "2";
        var_dump($r2);
        echo "<br>";

        // $r3 = "Eduardo" + "Idalgo"; // ERRO
        // O certo seria
        $r3 = "Eduardo " . "Idalgo";
        echo $r3;
        echo "<br>";
    ?>
</body>
</html>