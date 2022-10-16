<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento e Decremento</title>
</head>
<body>
    <?php 
    
    /* 
    OPERADORES DE INCREMENTO

    PRÉ-INCREMENTO -> $a = $a + 1 -> ++$a
    PÓS-INCREMENTO -> $a = $a + 1 -> $a++
    PRÉ-DECREMENTO -> $a = $a - 1 -> --$a
    PÓS-DECREMENTO -> $a = $a - 1 -> $a--
    
    */

    $atual = $_GET["aa"];
    echo "O ano atual é $atual";
    echo "<br> E o ano anterior é " . --$atual;

    ?>
</body>
</html>