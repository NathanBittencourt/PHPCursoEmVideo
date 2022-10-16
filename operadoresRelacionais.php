<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php 
    
    /* 
    OPERADORES RELACIONAIS

    MAIOR->     $a > $b
    MENOR->     $a < $b
    MAIOR OU IGUAL->    $a >= $b
    MENOR OU IGUAL->    $a <= $b
    DIFERENTE->     $a <> $b OU $a != $b
    IGUAL->     $a == $b
    IDÊNTICO $a === $b
    -----------------------------------

    OPERADOR UNÁRIO

    expressão ? verdadeiro : falso;
    ex:
    $maior = $a > b ? $a : $b;
    */

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os valores passados foram $n1 e $n2 <br/>";

    $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
    
    echo "O resultado será $r";
    echo "<br/>--------------------------------------";

    echo "<br/> OPERADOR IGUAL E IDÊNTICO";
    $a = 3;
    $b = "3";
    $res = ($a == $b) ? "SIM" : "NÃO";
    echo "<br/><br/> As variáveis A e B são iguais?<br/> $res";
    ?>
</body>
</html>