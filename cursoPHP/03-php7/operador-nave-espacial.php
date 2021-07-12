<?php
//<=> operador
// si retorna 1 el val de la izq es mayor
// si retorna 0 el los valoes son iguales
// si retorna -1 el val de la der es mayor

echo '1 <=> 1'. 10 <=> 1 . '</br>'; //comparacion de si son mayores menores o iguales
echo '1 <=> 0'. 1 <=> 10 . '</br>'; //comparacion de si son mayores menores o iguales
echo '0 <=> 1'. 10 <=> 10 . '</br>'; //comparacion de si son mayores menores o iguales


echo '</br> hola </br>';

$arregloNumeros=array(5,21,4,25,3,64,4,88,9);
sort($arregloNumeros);
echo '</br>'. implode(' - ',$arregloNumeros) . '</br>';  //implode muestra el arreglo


function comparar($a,$b){
    return $a <=> $b;
}

usort($arregloNumeros,'comparar');
echo  '</br>'. implode(' - ',$arregloNumeros) . '</br>'; 

//usado solo para crear algoritmos de ordenamiento
?>