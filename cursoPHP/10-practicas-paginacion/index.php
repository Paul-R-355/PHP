<?php


try {
    $conexion= new PDO('mysql:host=127.0.0.1;dbname=prueba_consola','root','');//los ultimos parametros son usuario y contrasenia
    //echo 'CONEXION OK </br>';
} catch (PDOException $e) {
    echo 'ERROR'. $e->getMessage();
    die();
}

$pagina= isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1; //ubicar la pagina
$postPorPagina=30;
//IMPORTANTE
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0; //Para saber de donde traere los articulos

//SQL_CALC_FOUND_ROWS  para saber cuantos articulos trajimos en total
$resultados=$conexion->query("SELECT SQL_CALC_FOUND_ROWS * FROM usuario LIMIT $inicio, $postPorPagina;");//consultas sencillas sin concatenar la variable
$articulos = $resultados->fetchAll();

if(!$articulos){
    header('Location: index.php');
}

$totalArticulos=$conexion->query('select FOUND_ROWS() as total');
$totalArticulos=$totalArticulos->fetch()['total']; //traemos un arreglo
//echo $totalArticulos;
$numeroPaginas = ceil($totalArticulos/$postPorPagina);
//echo $numeroPaginas;



require 'index.view.php'

?>