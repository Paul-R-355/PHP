<?php
//especificaremos el tipo de dato regresado
//este tipo de dato se declara en la creacion de la funcion 

declare(strict_types=1);


function cuadraro( $numero):int{
        return $numero*$numero;
}

$numero=5;
echo 'el cuadrado de -->'.$numero.'es: '. cuadraro($numero). '</br>';


echo 'ejecucion con variable erronea';
$numero='25';
echo 'el cuadrado de -->'.$numero.'es: '. cuadraro($numero). '</br>';


echo 'ejecucion con variable erronea';
$numero="4";
echo 'el cuadrado de -->'.$numero.'es: '. cuadraro( $numero). '</br>';


?>