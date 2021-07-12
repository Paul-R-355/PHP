<?php

echo '<h1>Recorrer areglos WHILE</h1>';

$arreglo_meses=array(
    'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
);

$arreglo_salario=array(300,200,500,400,600,800,850,900,350,650,600,570,950);

//while se ejecuta solo si la condicion se cumple la primera vez
$i=0;
while($arreglo_salario[$i]<=900){    
    echo $arreglo_salario[$i] . '</br>';
    $i++;
}

echo '<h1>Recorrer areglos DO WHILE</h1>';

$a=0;
//se ejecuta al menos una vez para pasar despues a la condicion
do {    
    echo $arreglo_meses[$a] . '</br>';
    $a=$a+1;    
} while ($arreglo_meses[$a]!='Diciembre');


//Operador SEARCH (FIND) busca el elemento y debuelve el indice
echo '<h1>Recorrer areglos FIND (search)</h1>';

$mes_buscado=array_search('Julio',$arreglo_meses);
echo $mes_buscado . '</br>';

//Operador in array comprueba si existe el valor en le arreglo y devuelve 0 false o 1 true
echo '<h1>Recorrer areglos in array</h1>';

$mes_existe=in_array('Julio',$arreglo_meses);
echo $mes_existe . '</br>';

//Operador FOR EACH recorre arreglo
echo '<h1>Recorrer areglos FOR EACH</h1>';

foreach($arreglo_meses as $indice => $valor) {
    echo $valor. '</br>';
}

//Operador filter devulve un arreglo filtrado con la condicion
echo '<h1>Recorrer areglos FILTER</h1>';

$array_filtrado=array_filter($arreglo_salario,
    function($valor){
        return $valor>=650;
    });

foreach($array_filtrado as $indice => $valor) {
    echo $valor. '</br>';
}

//Operador FOREACH CON BREAk corta ejecucion
echo '<h1>Recorrer areglos FOREACH CON BREAk</h1>';

foreach($arreglo_meses as $indice => $valor) {
    if($valor=='Agosto'){
        break;
    }
    echo $valor. '</br>';
}



?>