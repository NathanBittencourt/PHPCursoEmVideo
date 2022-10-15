<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php 
    /* 
    OPERADORES DE ATRIBUIÇÃO

    ADIÇÃO -> $a = $a + $b -> $a += $b
    SUBTRAÇÃO -> $a = $a - $b -> $a -= $b
    MULTIPLICAÇÃO -> $a = $a * $b -> $a *= $b
    DIVISÃO -> $a = $a / $b -> $a /= $b
    MÓDULO -> $a = $a % $b -> $a %= $b
    CONCATENAÇÃO -> $a = $a . $b -> $a .= $b
    */

    $preco = $_GET["p"];
    echo "O preço do produto é R$ " . number_format($preco, 2);
    $preco += ($preco * 10/100);
    echo "<br> E o novo preço com 10% de aumento será R$ " . number_format($preco, 2);

    $preco -= ($preco * 10/100);
    echo "<br> E o novo preço com 10% de desconto será R$ " . number_format($preco, 2);

    
    ?>
</body>
</html>