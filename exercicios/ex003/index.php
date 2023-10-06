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
        echo "o valor da variável é $num";

        // var_dump() mostra as informações da variável
        $v = 45.2;
        var_dump($v);

        $num = 3e2; // 3 x ((10)^2)
        echo "O valor 3 X 10<sup>2</sup> é igual a $num";

        $num = (float)"950";
        var_dump($num);

        $casado = false;
        var_dump($casado);
        echo "O valor para casado é $casado";

        $vet = [6, 2.5, "Isabela", 3, false];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>