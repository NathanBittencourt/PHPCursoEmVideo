<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
</head>
<body>
    <?php 

    /* 
    OPERADORES LÓGICOS

    E = and  &&
    OU = or ||
    OU exclusivo (pode ser uma coisa ou outra, mas nunca as duas) = xor
    NÃO = !
    */

    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos";
    $tipo = ($idade >= 18 and $idade < 65) ? "OBRIGATÓRIO": "NÃO OBRIGATÓRIO";
    echo "<br/>Seu voto é $tipo";
    ?>
</body>
</html>