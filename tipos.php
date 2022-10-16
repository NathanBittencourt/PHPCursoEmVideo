<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $idade = 19;
        $nome = "Nathan";
        echo $nome . " tem " . $idade . " anos!<br>";
        echo "$nome tem $idade anos!<BR>"; //aspas duplas, o php entende a variável
        echo '$nome tem $idade anos!'; //aspas simples não
    ?>
</body>
</html>