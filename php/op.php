<?php

    $numUno = 5 ;
    $numDos = 2 ;
    $numTres = 4 ;
    $numCuatro = 3 ;
    $numNegativo = -3;

    $resultado = $numCuatro + $numDos;

    var_dump($resultado);
    echo ("-");
    print_r($resultado);
    echo ("-");
    echo ("$resultado");

    echo("<hr>");
    $resultado = -$numCuatro;
    print_r($resultado);
    echo("/");
    print_r($numNegativo);
    echo("/");
    $resultado = -$numNegativo ;
    print_r($resultado);
    echo("<hr>");
    $resultado = $numDos - $numCuatro;
    print_r($resultado);
    echo("<hr>");
    $resultado = $numDos * $numCuatro;
    print_r($resultado);
    echo("<hr>");
    $resultado = $numDos / $numCuatro;
    print_r($resultado);
    echo("<hr>");
    $resultado = $numDos ** $numCuatro;
    print_r($resultado);
    echo("<hr>");
    $resultado = $numDos % $numCuatro;
    print_r($resultado);
    echo("<hr>");
    $resultado = ($numTres + $numCuatro ) / $numCuatro;
    print_r($resultado);
    echo("<hr>");
    $resultado = $numCuatro=+6;
    print_r($resultado);
    echo("<hr>");
    
    echo("Operadores Asignacion");
    echo("<hr>");

    $numero = 7; 
    print_r($numero);
    $numero =+ 2 ;
    echo("/");
    print_r($numero);
    $numero -= 4;
    echo("/");
    print_r($numero);


    echo("<hr>");

    $texto = "Holol soy lol";
    print_r($texto);
    echo("<hr>");
    $texto = "hola soy lol"."- soy lol dos";
    print_r($texto);
    echo("<hr>");
    $texto = $numero."hola soy lol"."soy lol dos".$numero;
    var_dump($texto);

    







?>