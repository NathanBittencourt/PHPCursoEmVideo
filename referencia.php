<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Referenciadas</title>
</head>
<body>
    <?php 
    
    /* 
    VARIÁVEIS REFERENCIADAS

    $a = 3;
    $b = $a;
    $b += 5;
    echo $a;
    echo $b;

    $a está valendo 3
    $b está valendo 8
    --------------------

    $a = 3;
    $b = &$a;
    $b += 5;
    echo $a;
    echo $b;

    $a e $b estão interligados pelo &
    $b está valendo 8
    logo, $a também está valendo 8
    
    */

    $a = 3;
    $b = $a;
    $b += 5;
    echo "A variável A vale $a";
    echo "<br/> A variável B vale $b";

    ?>
</body>
</html>