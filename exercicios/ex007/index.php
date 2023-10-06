<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <?php
        echo "<b>abs()</b><br>";
        echo "Retorna o valor absoluto<br>";
        echo "<br>500 = " . abs(500) . "<br>";
        echo "-200 = " . abs(-200) . "<br>";

        echo "<br><b>base_convert()</b><br>";
        echo "Converte números de uma base pra outra<br>";
        echo "<br>254<sub>10</sub> = " . base_convert(254, 10, 8) . "<sub>8</sub><br>";
        echo "254<sub>10</sub> = " . base_convert(254, 10, 16) . "<sub>16</sub><br>";;
        echo "254<sub>10</sub> = " . base_convert(254, 10, 2) . "<sub>2</sub><br>";
        
        echo "<br><b>Arredondamento</b><br>";
        echo "<br>round() arredondamento aritmético<br>";
        echo "round(5.49) = " . round(5.49) . "<br>";

        echo "<br>ceil() arredonda pra cima<br>";
        echo "ceil(5.71) = " . ceil(5.71) . "<br>";
        
        echo "<br>floor() arredonda pra baixo<br>";
        echo "flor(5.99) = " . floor(5.99) . "<br>";

        echo "<br><b>hypot()</b><br>";
        echo "Calcula a hipotenusa<br>";

        echo "<br><b>intdiv()</b><br>";
        echo "Divide apenas inteiros<br>";
        echo "<br>intdiv(5, 2) = " . intdiv(5, 2) . "<br>";

        echo "<br><b>min() e max()</b><br>";
        echo "Mostra o valor mínimo e máximo de uma sequência de números<br>";
        echo "<br>max(5, 2, 7, 5, 1, 9, 7, 6) = " . max(5, 2, 7, 5, 1, 9, 7, 6) . "<br>";
        echo "min(5, 2, 7, 5, 1, 9, 7, 6) = " . min(5, 2, 7, 5, 1, 9, 7, 6) . "<br>";

        echo "<br><b>PI</b><br>";
        echo "Retorna o valor de PI por constante ou por função<br>";
        echo "<br>Função pi() = " . pi() . "<br>";
        echo "Constante M_PI = " . M_PI . "<br>";

        echo "<br><b>sqrt()</b><br>";
        echo "Retorna a raíz quadrada do número<br>";
        echo "<br>sqrt(81) = " . sqrt(81) . "<br>";
        echo "<br><b>Raíz por potência</b><br>";
        echo "81 ** (1/2) = " . 81 ** (1/2) . "<br>";
        echo "27 ** (1/3) = " . 27 ** (1/3) . "<br>";

        //sin(), cos(), tan()

    ?>
</body>
</html>