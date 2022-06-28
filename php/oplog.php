<?php


$a = true;
$b = false;
$c = true;
$d = false;


echo("Operadores Logicos");
echo("<hr>");
var_dump($a); 
echo("<hr>");

$resultado = $a && $b ;
var_dump($resultado); 
$resultado = $a && $c;
var_dump($resultado); 
$resultado = $b && $d;
var_dump($resultado); 





echo("<hr>");

$resultado = $a || $b ;
var_dump($resultado); 
$resultado = $a || $c;
var_dump($resultado); 
$resultado = $b || $d;
var_dump($resultado); 

echo("<hr>");

$resultado = $a xor $b ;
var_dump($resultado); 
$resultado = $a xor $c;
var_dump($resultado); 
$resultado = $b xor $d;
var_dump($resultado); 





















?>