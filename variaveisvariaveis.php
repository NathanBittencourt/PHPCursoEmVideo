<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis</title>
</head>
<body>
    <?php 
    
    /* 
    VARIÁVEIS DE VARIÁVEIS

    $site = "cursoemvideo";
    $$site = "cursoPHP";
    
    $site recebeu "cursoemvideo"
    e a variável $site, com outro $ na frente
    tranforma "cursoemvideo" em uma variável
    que recebe "cursoPHP"
    */

    $x = "abc";
    $$x = "def";
    echo "O conteúdo da variável X é $x";
    echo "<br/> A variável ABC recebeu o valor $abc";

    ?>
</body>
</html>