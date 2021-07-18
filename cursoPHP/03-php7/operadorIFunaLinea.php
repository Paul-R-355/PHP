<?php

// ?? --> este operador permite hacer un if de una sola linea. (abrebiado) OPERADOR DE FUCION NULL

/* Podemos abrebiar todo esto!!
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}else{
    $nombre =  'Anonimo';
}
*/
//if de una linea
//forma antigua
//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

//if de una linea abrebiada para saber si la variable esta seteada
//forma nueva
$nombre = $_GET['nombre'] ?? 'Anonimo Nuevo'; //Si la variable esta seteada guardala en nombre sino guarda anonimo

echo $nombre;

?>