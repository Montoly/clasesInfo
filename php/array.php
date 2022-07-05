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

$arrayDesordenado = array(5,7,3,9);
$numeroMenor = 0;
print_r($arrayDesordenado);

$totalArray = count ($arrayDesordenado);

for($i=0; $i<$totalArray; $i++){

    print_r("<br>".$arrayDesordenado[$i]);
    if($arrayDesordenado[$i]< $numeroMenor || $numeroMenor == 0){
        $numeroMenor = $arrayDesordenado[$i];
    }
}


print_r("<br>".$arrayDesordenado[$i]);
?>