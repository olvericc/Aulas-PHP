<?php
    $valor1 = $_POST["txtValor1"];
    $valor2 = $_POST["txtValor2"];
    $op = $_POST["txtOp"];

    $calculo = 0;

    if($op == "1"){
        $calculo =  $valor1 + $valor2;
    }else if($op == "2"){
        $calculo = $valor1 - $valor2;
    }else if($op == "3"){
        $calculo = $valor1 * $valor2;
    }else{
        $calculo = $valor1 / $valor2;
    }

    echo("Resultado: $calculo")

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <a href="calcubladorab.html">Voltar</a>
    </body>
</html>