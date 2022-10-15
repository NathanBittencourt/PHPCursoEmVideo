<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas em PHP</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
    // ABS = Valor Absoluto
    // POW = Potência
    // SQRT = Raiz Quadrada
    // ROUND = Arredondamento
    // INTVAL = Valor Inteiro da Variável
    // NUMBER_FORMAT() = Formatação
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2<h2>";
        echo "O valor absoluto de $v2 é " . abs($v2); // abs() passa o valor absoluto
        echo "</br>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2); // pow() passa a potência
        echo "</br>A raíz quadrada de $v1 é " . sqrt($v1); // sqrt() passa a raíz quadrada
        echo "</br>O valor de $v2 arredondado é " . round($v2); // sqrt() arredonda o valor
        // ceil = arredonda para cima, floor = arredonda para baixo
        echo "</br> A parte inteira de $v2 é " . intval($v2); // mostra a parte inteira da variável
        echo "</br> A parte ineira de $v2 é " . intval($v2); // mostra a parte inteira da variável
        echo "</br> O valor de $v1 em moeda é R$" . number_format($v1, 2, ",", ".");
    ?>
</body>
</html>