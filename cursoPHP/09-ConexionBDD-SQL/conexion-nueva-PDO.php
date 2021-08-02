<?php
//esta forma se recomienda y es PDO

try {
    $conexion= new PDO('mysql:host=127.0.0.1;dbname=prueba_consola','root','');//los ultimos parametros son usuario y contrasenia
    echo 'CONEXION OK </br>';

    $resultados=$conexion->query('SELECT * FROM usuarios;');//consultas sencillas sin concatenar la variable

    foreach ($resultados as $key => $fila) {//iteramos los arreglos de filas
       //print_r($fila);
       echo 'nombre:'.$fila['nombre']. 'correo:'.$fila['email'].'</br>';
    }

} catch (PDOException $e) {
    echo 'ERROR'. $e->getMessage();
}

/*
//VERSION CORRECTA Y ESTABLE
//esta forma requiere el ODBC de mysql server
//https://www.microsoft.com/es-es/download/details.aspx?id=36434
//tambien necesita los archivos de sql server correspondientes a la version de nuestro PHP 
//ESTA CONECCION ME PERMITE CONECTARME DESDE MI COMPUTADOR LOCAL AL SERVIDOR DE BDD DE SANDE
//Necesito levantar la VPN para la conexion
 
try {
    //phpinfo();
    $c = new PDO("sqlsrv:Server=192.168.146.7,1433;Database=Proyecciones", "sa", "Sande01");
    echo 'CONEXION OK </br>';
} catch (PDOException $e) {
    echo 'ERROR'. $e->getMessage();
}
*/

?>