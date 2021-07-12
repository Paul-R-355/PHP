<?php
//se soluciona con una definicion explicita en el parametro como decir que sea int
//function cuadraro(int $numero){
// o usar declare(strict_types=1);

declare(strict_types=1);

function cuadraro( $numero){
        return $numero*$numero;
}

$numero=5;
echo 'el cuadrado de -->'.$numero.'es: '. cuadraro($numero). '</br>';


echo 'ejecucion con variable erronea';
$numero="Carlos";
echo 'el cuadrado de -->'.$numero.'es: '. cuadraro($numero). '</br>';


echo 'ejecucion con variable erronea';
$numero="4";
echo 'el cuadrado de -->'.$numero.'es: '. cuadraro( $numero). '</br>';


?>