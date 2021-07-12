<?php
echo '<h1>SCOPE</h1> </br>';
//IMPORTANTE
//Las variables locales no pueden ser accedidas por la sfunciones estas deben ser 
//pasadas como parametros

/*
$numero=7;

function mostrarNumero(){
    echo $numero;
}

mostrarNumero();
*/

$numero=7;

function mostrarNumero($numero){
    echo $numero;
}

mostrarNumero($numero);

//tampoco puedo acceder a una variable dentro de una funcion esta debe ser retornada.

?>