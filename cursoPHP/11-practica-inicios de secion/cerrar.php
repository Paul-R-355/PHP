<?php session_start();
//cuando quieres rever el vcontenido no lo permite
session_destroy();
$_SESSION = array();//limpiamos la sesion 

header('Location: login.php');//redirigimos
die();

?>