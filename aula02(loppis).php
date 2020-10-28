<?php

    //WHILE
    $cont = 0;
    while($cont <= 10){
        echo("Contador: ".$cont."<br/>");
        $cont ++;
        //$cont = $cont + 1;
    }

    //DO WHILE

    $cont2 = 0;
    do{
        echo("Contador2: ".$cont2."<br/>");
        $cont2 = $cont2 + 1;
    }while($cont2 <=10);

    //FOR
     
    for($i = 0; $i <=10; $i++){
        echo("I: ".$i);
    }
?>