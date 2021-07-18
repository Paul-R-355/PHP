<?php

$errores='';
$enviado='';

if (isset($_GET['submit'])){
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $mensaje = $_GET['mensaje'];
    
    if (!empty($nombre)) {
        $nombre=trim($nombre);
        $nombre=filter_var($nombre,FILTER_SANITIZE_STRING);        
    }else{
        $errores .= 'Por favor ingresa un nombre </br>';
    }

    if (!empty($correo)) {
        $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);

        if(!(filter_var($correo,FILTER_VALIDATE_EMAIL))){
            $errores .= 'Por favor ingresa un correo valido </br>';
        }
    }else{
        $errores .= 'Por favor ingresa un correo </br>';
    }
    if (!empty($mensaje)) {
        $mensaje= htmlspecialchars($mensaje);
        $mensaje= trim($mensaje);
        $mensaje= stripslashes($mensaje);
    }else{
        $errores .= 'Por favor ingresa un mensaje </br>';
    }

    if(!$errores){//si no hay errores
        $enviar_a='tunombre@tuempresa.com';
        $asunto=' correo enviado desde mi pagina.com';
        $mensaje_preparado='De:'.$nombre.'\n';
        $mensaje_preparado.='Correo:'.$correo.'\n';
        $mensaje_preparado.='Mensaje:'.$mensaje.'\n';

        //mail($enviar_a,$asunto,$mensaje_preparado);//no funciona por ser un local host pero en un local hosting si funciona
        $enviado='true';
    }

}

require 'index.view.php';

?>