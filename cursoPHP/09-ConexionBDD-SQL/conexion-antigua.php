<?php
//esta forma ya no se recomienda

$conexion = mysql_connect('localhost','root','') or die('no se pudo conectara la DB');
mysql_select_db('prueba_consola',$conexion);
$resultados=mysql_query('SELECT * FROM usuarios;');

//-------------------------

$fila=mysql_fetch_object($resultados);//forma de objeto
echo $fila->nombre;
echo '<br>';
$fila=mysql_fetch_array($resultados);//forma de arreglo
echo $fila['nombre'];
echo '<br>';

//solo trae los resultados
while ($fila = mysql_fetch_object($resultados)){
    echo $fila->nombre;
    echo '<br>';
}


?>