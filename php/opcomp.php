<?php

$numUno = 5 ;
$numDos = 2 ;
$numTres = 4 ;
$numCuatro = 5 ;
$numtexto = "5";



echo("Operadores Logicos");
echo("<hr>");




$resultado = $numUno == $numDos;
var_dump($resultado);

$resultado = $numUno == $numCuatro;
var_dump($resultado);

$resultado = $numUno == $numtexto;
var_dump($resultado);

$resultado = $numUno === $numtexto;
var_dump($resultado);

echo("<hr>");

$resultado = $numUno != $numDos;
var_dump($resultado);

$resultado = $numUno != $numCuatro;
var_dump($resultado);

$resultado = $numUno !== $numtexto;
var_dump($resultado);

$resultado = $numUno != $numtexto;
var_dump($resultado);

echo("<hr>");

$resultado = $numUno > $numDos;
var_dump($resultado);

$resultado = $numUno < $numDos;
var_dump($resultado);










?>