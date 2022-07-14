<?php

echo ("lol");

$arrayColoresUno = array ("Verde","Naranja","Rojo","Azul");
print_r($arrayColoresUno);
echo ("<br>");

$arrayColoresUno[ ] = "Amarillo";
$arrayColoresUno[ ] = "Ambar";
$arrayColoresUno[ ] = "Aniz";
$arrayColoresUno[12 ] = "Marron";





print_r($arrayColoresUno);



echo ("<br>");
echo ("<hr>");

$arrayColoresDos = array ("verde" => " #00ff00", "rosa" => "#ff8080 " );

echo ("<br>");


print_r($arrayColoresDos);

$arrayColoresDos[ 'Amarillo'] = " #ffcc00";
$arrayColoresDos[ 'Negro'] = " #000000";
$arrayColoresDos[ 'Blanco'] = "#ffffff";

echo ("<br>");
print_r($arrayColoresDos);


echo ("<br>");

print_r($arrayColoresDos['Blanco']);
if($arrayColoresDos['Negro'] == "#000000"){

    echo ("soy negro");
}
 
//foreach($arrayColoresDos)

//foreach("color:".$valor);
//if($valor == "#ffffff"){
//    echo("soy el blanco");
//}






//-----------------------------------------------------


echo ("<br>");

$strText = "soy txt" ;
$arrayTxt = str_split($strText);
$arrayTxtinv = array();
$arrayTxtFin = array();
$i = 0;
print_r($strText);
print_r($arrayTxt);

foreach($arrayTxt as $letra){

    $final = count($arrayTxt) - $i;
    $arrayTxtinv [$final] = $letra;
    $i++ ;
}
echo ("<br>");
print_r($arrayTxtinv);

for($k = 0; $k <= count($arrayTxtinv); $k++){
    $final = count($arrayTxtinv) - $k;
    $final = $k ;
    if(isset($arrayTxtinv[$final])){
    $arrayTxtFin[$k] = $arrayTxtinv[$final];
    }
}
echo ("<br>");
print_r($arrayTxtFin);
$TxtFin = implode(" ",$arrayTxtFin);
echo ("<br>");
print_r($TxtFin);


?>