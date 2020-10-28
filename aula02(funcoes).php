<?php

    declare(strict_types=1);


    //FUNÇÃO

    function OlaMundo(){
        echo("Ola mundo em função <br/>");
    }

    OlaMundo();

    //ARGUMENTOS

    function PegarNome ($nome){
        echo("Nome informado é: $nome <br/>");
    }

    PegarNome("Eric");
    PegarNome("Dias");
    PegarNome("Bruno");

    //EXEMPLO CALCULO   

    function Calculo($x, $y, $op){
        $calculo = 0;
        if($op == 1){
            $calculo = $x + $y;
        }else if($op == 2){
            $calculo = $x - $y;
        }else if($op == 3){
            $calculo = $x * $y;
        }else if($op ==4){
            $calculo = $x / $y;
        }
        return $calculo;
    }

    $retorno = Calculo(2,5,1);
    echo("Calculo: ".$retorno);

    //declare(strict_types=1);
    
    function Teste(int $codigo =  20){
        echo("Codigo: ".$codigo."<br/>");
    }
    
    Teste(500);
    Teste();    
    Teste(600); 

    function Soma(int $a, int $b){
        return $a + $b;
    }

    echo("Resultado: ".Soma(2,3)."<br/>");

?>