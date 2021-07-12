<?php

$nombre="Carlos";
$numero=5;
$decimal=10.5;
$booleano=true; 

$arreglo_strings = array('lunes','Martes','Miercoles','Jueves','Viernes');


$arreglo_meses=array(
    'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
);

$arreglo_salario=array(300,200,500,400,600,800,850,900,350,650,600,570,950);


$arreglo_multidimensional=array(
    array('Nombre'=>'Juan','Apellido'=>'Lopes','Edad'=>35),
    array('Nombre'=>'Luis','Apellido'=>'Perez','Edad'=>30),
    array('Nombre'=>'Marco','Apellido'=>'Andrade','Edad'=>25),
    array('Nombre'=>'Julian','Apellido'=>'Soria','Edad'=>40),
);

//Funcion var_dump 
echo '<h1> Funcion var_dump para obtener tipo de dato valor y tamanio si es string</h1>';

// tipo de dato -- tamanio -- valor
echo '<h3>variables</h3></br>';
var_dump($nombre); 
echo '</br>';
var_dump($numero); 
echo '</br>';
var_dump($decimal); 
echo '</br>';
var_dump($booleano); 
echo '</br>';

echo '<h3>arreglos</h3></br>';
echo '<pre>';
var_dump($arreglo_strings); 
echo '</br>';
var_dump($arreglo_meses); 
echo '</br>';
var_dump($arreglo_salario); 
echo '</br>';
var_dump($arreglo_multidimensional); 
echo '</br>';
echo '</pre>';

echo '<h1> Funcion print_r para obtener el valor de la variable</h1>';


// no me dice el tipo de dato solomanete me da el valor --NO MUESTRA VALOR DE BOOLEANOS

echo '<h3>variables</h3></br>';
print_r($nombre); 
echo '</br>';
print_r($numero); 
echo '</br>';
print_r($decimal); 
echo '</br>';
print_r($booleano); 
echo '</br>';

echo '<h3>arreglos</h3></br>';

print_r($arreglo_strings); 
echo '</br>';
print_r($arreglo_meses); 
echo '</br>';
print_r($arreglo_salario); 
echo '</br>';
print_r($arreglo_multidimensional); 
echo '</br>';


?>

