<?php
    function miFuncion($texto,$fecha = "No trajo fecha"){

echo($texto."<br>");
echo("Fecha:".$fecha."<br>");

    }
     function suma($ValorA,$ValorB){
        if(is_numeric($ValorA) && is_numeric($ValorB)){
            $respuesta = $ValorA + $ValorB;
        }else {$respuesta ="alguna de las entradas no es un num";}
     }
    $strTexto = "holol";
    $fecha = date ("d-m-y");
    $vartexto = "texto q lol";

    miFuncion($strTexto,$strTexto);

    $varNumA = 10;
    $varNumB = 5;

    $respuesta = suma($varNumA + $varNumB);

    print_r("<br> total :".$respuesta);

    ?>
    