<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = Hexadecimal 0b = Binário 0 = Octal
        $num = 010;
        echo "o valor da variável é $num</br>";

        // var_dump() mostra as informações da variável
        $v = 45.2;
        echo var_dump($v) . "</br>"; // float(45.2)

        $num = 3e2; // 3 x ((10)^2)
        echo "O valor 3 X 10<sup>2</sup> é igual a $num</br>"; // 300

        $num = (float)"950";
        echo var_dump($num) . "</br>"; //

        $casado = false;
        echo var_dump($casado) . "</br>";

        $vet = [6, 2.5, "Isabela", 3, false];
        echo var_dump($vet) . "</br>";

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>