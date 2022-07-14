<?php

 echo("soy la conexion myslq");

//pdo

//pdo(string conect)
$options =[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE=>PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING
];



$objConect = new PDO("mysql:localhost=localhost;dbname=clasesinfo","root","");

$sql = "SELECT * FROM profesores";

$preparo = $objConect->prepare($sql);
$preparo->execute(array());
$lista = $preparo->fetchALL();

print_r($lista);


?>