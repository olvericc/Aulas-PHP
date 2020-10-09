<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aula 01 PHP </title>
</head>
<body>
    <?php
        echo("ESTOU AQUI NO HTML")
    ?>    
</body>
</html>

<?php

    // PHP- é uma línguagem de script de servidor e uma ferramenta para criar páginas web dinâmicas.
    /*
        Comentário com multiplas linhas
    */

    echo("OLÁ MUNDO ");

    //concatenação em PHP (.)
    //variaveis
    /*
        começa sempre com cifrão ($)
    */

    $nome = "Anildo";
    $x = 5;
    $y = 10.1;
    echo("<br/>");
    echo("Nome: " . $nome . "x: " . $x . "y:" . $y);

    /*
        SAIDA DE DADOS
        *echo* e *print*
    */

    print("<br/>");
    print("SAIDA DE DADOS COM PRINT");
    echo("<br/>");
    echo("SAIDA DE DADOS COM ECHO");

    /*
        TIPOS DE DADOS
    */

    print "<br/>";
    $valor = 150;
    $texto = "ola";
    $resp = false;
    var_dump ($resp);
    print "<br/>";
    var_dump ($valor);
    print "<br/>";
    var_dump ($texto);

    /*
        MANIPULAÇÃO DE STRING COM FUNÇÕES
    */

    echo "<br/>".strlen($texto);
    $nome_completo = "Eric Lopes Oliveira";
    echo "<br/>".strrev($nome_completo);
    echo "<br>".str_word_count($nome_completo);
    //strpos(), str_replace()

    /*
        NUMERO EM  PHP
    */

    var_dump("<br/> INT: ".is_int($valor));
    var_dump("<br/> FLOAT: ".is_float($y));

    /*
        VARIAVEIS CONSTANTES, O SEU VALOR NÃO PODE SER ALTERADO
    */

    define("CARRO","Celta");
    echo "<br/>".CARRO;
    
    define("BARCO","Lancha", true);
    echo "<br/>".BARCO;

    define("MOTOS",[
        "XJ6",
        "HORNET",
        "CB1000"
    ]);
    echo "<br/>.".MOTOS[2];

    print "<br/> OLA CLIENTE: ".$nome_completo;

    /*
        OPERADORES ARITIMÉTICOS 
        (+) somar
        (-) subtrair
        (*) multiplicar
        (/) divisão
        (%) porcentagem
    */

    $soma = 10 + 5;
    echo "<br/>".$soma;

    /*
        OPERADORES DE ATRIBUIÇÃO
        (=)
        (+=y) (x = x + y)
        (-=y)
        (*=y)
        (/=y)
        (%=y)
    */

    $x = 10;
    $y = 2;

    $x + $y;
    $x = $x + $y;

    /*
        OPERADORES DE COMPARAÇÃO
        (==)
        (===) verifica igualdade das variaves e o tipo  
        (!=) diferente 
        (>) maior que
        (>=) maior igual 
        (<) menor que
        (<=) menor igual
    */

    $a = "20";
    $b = 20;
    
    if ($a == $b){
        echo "<br/> são iguais mas, não verifiquei o tipo";
    }

    if($a === $b){
        echo "<br/> são iguais, e verifiquei o tipo";
    }

    /*
        OPERADORES DE INCREMENTO E DECREMENTO
        (++$x)
        (--$x)
        ($x++)
        ($x--)
    */

    $a++;
    --$b;

    /*
        OPERADORES LÓGICOS
    */

    if(!$a > $b || !$b < 50){
        //comando
    }
    echo "<br/>";
    $user = "Eric";
    echo $status = (empty($user)) ? "usuario não identificado":"IDENTIFICADO";

    if(empty($user)){
        echo "usuario nao identificado";
    }else{
        echo "<br/> Identificado com if";
    }
?>