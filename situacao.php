<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
</head>
<body>
    <?php 
    
    /* 
    OPERADOR UNÁRIO

    expressão ? verdadeiro : falso;
    ex:
    $maior = $a > b ? $a : $b;
    */

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2) /2;
    echo "A media entre $nota1 e $nota2 é $m <br/>";
    
    echo "A situação do aluno é " . (($m < 6) ? "REPROVADO" : "APROVADO");

    /* 
    OPERADORES LÓGICOS

    E = and  &&
    OU = or ||
    OU exclusivo (pode ser uma coisa ou outra, mas nunca as duas) = xor
    NÃO = !
    */
    ?>
</body>
</html>