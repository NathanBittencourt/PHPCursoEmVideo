<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor";
        echo "<br/> A raíz quadrada de $valor é igual a " . number_format($rq, 2);
    ?>
    <br/>
    <a href="exercicio1.html">Voltar</a>
</body>
</html>