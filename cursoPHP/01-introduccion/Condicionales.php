<?php
/*
Operadores para comparacion 
== Igual
< Menor que 
> Mayor que
<= Menor o igual que 
>=Mayor igual que
! Negacion

!= Diferente
and concatenar condiciones para que se cumplan las dos
or concatenar condiciones para que se cumplan una u otra
*/

//Condicionales Logicos

echo '<h2>Condicionales Logicos</h2> </br> if';

$edad=25;
$nombre="paul";
$estado_civil=true;

if ($edad) {
   echo "True  </br>"; 
}else{
    echo "false </br>"; //si es null va a false
}

if ($nombre) {
echo "True </br>";
}else{
    echo "false </br>";  //string vacio va a false
}

if ($estado_civil) { //TRUTY FALSSY
echo "True </br>"; //si e strue un boolean va por el if
}else{
    echo "false </br>";
}


if ($edad >= 25) {
    echo 'Eres mayor de edad tienes' .$edad .'</br>';   
} else {
    echo 'Eres menor de edad tienes' .$edad .'</br>';   
}
  
//elseif

echo '<h2>Condicionales Logicos  elseif</h2></br>';

$arreglo_salario=[300,200,500,400,600,800,850,900,350,650,600,570,700];

foreach ($arreglo_salario as $indice => $salario) {

    if($salario >= 100 && $salario <= 200){
        echo 'Tu salario esta entre 100 y 200 es: ' .$salario .'</br>';   
        }elseif ($salario >= 201 && $salario <=  300) {
            echo 'Tu salario esta entre 201 y 300 es: ' .$salario .'</br>';
        }elseif ($salario >= 301 && $salario <=  400) {
            echo 'Tu salario esta entre 301 y 400 es: ' .$salario .'</br>';
        }elseif ($salario >= 401 && $salario <=  500) {
            echo 'Tu salario esta entre 401 y 500 es: ' .$salario .'</br>';
        }else{
            echo 'Tu salario es e smayor a 501 salario de: ' .$salario .'</br>';
        }
                
}
//operadores de igualdad 

// == para ver si el valor es igual.
// === para ver si el valor y tipo de datos son identicos.


//switch

echo '<h2>Condicionales Logicos  switch</h2></br>';

switch($arreglo_salario[5]){
    case 200:
        echo 'el valor es 200 </br>';
    break;
    case 300:
        echo 'el valor es 300 </br>';
    break;
    case 400:
        echo 'el valor es 400 </br>';
    break;
    case 500:
        echo 'el valor es 500 </br>';
    break;
    case 600:
        echo 'el valor es 600 </br>';
    break;
    default:
    echo 'el valor es mayor a 600 </br>';
    break;
}

echo '<h2>Isset -- if de una linea</h2></br>';

//isset debuelve true o false dependoiendo si la variable tiene un valor o no
$valor =18;
echo isset($valor);
echo'</br>';
// IF de una sola linea 

//Mostramos el anio solo si esta a sido ingresada

$anio=1995;
$anio = (isset($anio)) ? $anio : 'No estableciste tu anio de nacimiento'; 
echo 'anio: '.$anio;




?>