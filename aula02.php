<?php

    // IF, ELSE IF, ELSE
    $idade = 32;

    if ($idade >= 0 && $idade <= 10){
        echo("CRIANÇA");
    }else if($idade >= 11 && $idade <= 17){
        echo("JOVEM");
    }else if($idade >= 18 && $idade <= 30){
        echo("ADULTO");
    }else if ($idade >= 31){
        echo("MASTER");
    }else{
        echo("IDADE FORA DO INTERVALO");
    }

    // SWITCH CASE

    $dia = 3;
    $resp = "";
    switch($dia){
        case 1:
            $resp = "Domingo";
        break;

        case 2:
            $resp = "Segunda";
        break;

        case 3:
            $resp = "Terça";
        break;

        case 4:
            $resp = "Quarta";
        break;

        case 5: 
            $resp = "Quinta";
        break;

        case 6:
            $resp = "Sexta";
        break;

        case 7:
            $resp = "Sábado";
        default;
            $resp = "Dia fora do intervalo";
        
    }
    echo("<br/>");      //<br/> quebra linha
    echo("Dia Informado: ".$resp)
?>