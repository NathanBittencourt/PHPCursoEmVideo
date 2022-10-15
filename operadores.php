<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operações Aritméticas</title>
</head>
<body>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $media = ($n1 + $n2) / 2;
        echo "<h2>Valores Recebidos: $n1 e $n2<h2>";
        echo "A soma vale ". ($n1 + $n2);
        echo "<br/>A subtração vale ". ($n1 - $n2);
        echo "<br/>A multiplicação vale ". ($n1 * $n2);
        echo "<br/>A divisão vale ". ($n1 / $n2);
        echo "<br/>O módulo vale ". ($n1 - $n2);
        echo "<br/>A média vale $media";
        /* Ordem de Precedência
        1 - Parênteses (),
        2 - Multiplicação Divisão e Módulo * / %
        3 - Adição e Subtração + -
        */
    ?>
</body>
</html>