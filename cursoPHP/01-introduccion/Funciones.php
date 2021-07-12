<?php

function saludo(){
    echo 'saludo!! </br>';
}
saludo();

function saludoParametro($nombre){
    echo 'hola '. $nombre . '</br>';
    echo "hola como estas $nombre, esta linea se concanteno con sin el (.) </br>";
}

saludoParametro('paul');

function sunma($numeroUno, $numeroDos){
    $resultado=$numeroUno+$numeroDos;
    return $resultado;
}

echo 'el resultado de la suma es: '.sunma(1,2). '</br>';;

function calculoAreaTriangulo($base,$altura){
    return $area=($base*$altura)/2;
}

echo "el area del triamngulo es: ".calculoAreaTriangulo(25,14). '</br>';




echo '<h1> Funciones para strings</h1> </br>';

echo '<h3> seguridad para inyeccion de codigo htmlspecialchars</h3> </br>';
//seguridad para inyeccion de codigo
$textoEspecial='< > ""  & .';
htmlspecialchars($textoEspecial); //esos caracteres no se compilara como codigo fuente por el navegador

echo '<h3> eliminar espacios en blanco  trim</h3> </br>';
//eliminar espacios en blanco al incio y final de la cadena de texto
$textoEspacios=' Hola Paul ';
echo trim($textoEspacios). '</br>';

echo '<h3> tamanio de un string</h3> </br>';
//tamanio de un string
echo  'tamanio texto: '. strlen($textoEspacios). '</br>';

echo '<h3>obtenemos segmentos de texto</h3> </br>';
//obtenemos segmentos de texto
echo 'El segmento es: '. substr($textoEspacios,0,5). '</br>';

echo '<h3>todo a mayusculas de un string</h3> </br>';
//todo a mayusculas
echo 'El segmento es: '. strtoupper($textoEspacios). '</br>';

echo '<h3> todo a minusculas de un string</h3> </br>';
//todo a minusculas
echo 'El segmento es: '. strtolower($textoEspacios). '</br>';

echo '<h3>posicion de una letra de un string</h3> </br>';
//posicion de una letra
echo 'El posicion es: '. strpos($textoEspacios,'P'). '</br>';


echo '<h1> Funciones para strings - arreglos</h1> </br>';

$arreglo_multidimensional=array('nombre'=>'Juan','apellido'=>'Lopes','edad'=>'35');

echo '<h3> extraer elementos </h3> </br>';
//permite extraer elementos como variables

extract($arreglo_multidimensional);
echo $nombre.' </br>';


echo '<h3> extraer ultimo elemento </h3> </br>';
//permite extraer ultimo elemento edl arreglo pero lo quitas del arreglo

$ultimo=array_pop($arreglo_multidimensional);
echo $ultimo.' </br>';


echo '<h3> unir elementos </h3> </br>';
//permite extraer ultimo elemento edl arreglo pero lo quitas del arreglo

$union=join('-',$arreglo_multidimensional);
echo $union.' </br>';

$arreglo_strings = array('lunes','Martes','Miercoles','Jueves','Viernes');

echo var_dump($union).' </br>';
echo gettext($union).' </br>';
echo gettype($union).' </br>';
echo count($arreglo_strings).' </br>';
echo sort($arreglo_strings).' </br>';



echo '<h1> Funciones matematicas</h1> </br>';

$nuevoNumero=15.3658;
echo 'nuemro redondeado'.round($nuevoNumero).'</br>';

echo 'nuemro redondeado con un decimal'.round($nuevoNumero,1).'</br>';
echo 'nuemro redondeado con 3 decimales'.round($nuevoNumero,3).'</br>';

echo 'nuemro randomico de 0 a 10 --> '.rand(0,10).'</br>';

echo 'nuemro redondeo hacia arriba --> '.ceil($nuevoNumero).'</br>';

echo 'nuemro redondeo hacia abajo --> '.floor($nuevoNumero).'</br>';

//CONSTANTES
define('PI','3.14');
echo M_PI;



?>