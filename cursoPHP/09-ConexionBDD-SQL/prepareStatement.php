<?php
//esta forma se recomienda y es PDO

$id= $_GET['id'];

try {
    $conexion= new PDO('mysql:host=127.0.0.1;dbname=prueba_consola','root','');//los ultimos parametros son usuario y contrasenia
    echo 'CONEXION OK </br>';

    //$statement = $conexion->prepare('SELECT * FROM usuarios where id = :id;'); //:id es un place older
    $statement = $conexion->prepare('SELECT * FROM usuario'); //:id es un place older
    $statement->execute(array(':id' => $id, ':id'=>3));//recive parametro en forma de arreglo y aqui envio el parametro id
    //$resultados = $statement->fetch();//fetch solo trae uno 
    $resultados = $statement->fetchAll();//fetchAll trae todo 

    foreach ($resultados as $key => $fila) {//iteramos los arreglos de filas
        //print_r($fila);
        echo 'nombre:'.$fila['nombre']. 'correo:'.$fila['email'].'</br>';
     }
 
} catch (PDOException $e) {
    echo 'ERROR'. $e->getMessage();
}

?>