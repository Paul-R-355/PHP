<?php

$errores='';

if (isset($_POST['submit'])) { //valido recepcion de formulario
    $nombre=$_POST['nombre'];  //tomo datos
    $correo=$_POST['correo'];

    if (!empty($nombre)){
        $nombre = trim($nombre); //quito espacios en blanco
        $nombre = htmlspecialchars($nombre); //quito caracteres especiales
        $nombre = stripslashes($nombre); //remueve simbolos de escape "/"
        $nombre = strtoupper($nombre); //todo a mayusculas


        filter_var($nombre, FILTER_SANITIZE_STRING); //SANEAMOS LE CADENA REMOVIENDO TODO LOS SIGNOS QUE NO DEBEN IR
        filter_var($nombre, FILTER_VALIDATE_INT); //validamos LE CADENA REMOVIENDO TODO LOS SIGNOS QUE NO DEBEN IR
        echo 'tu nombre es'. $nombre . '</br>';
    }else{
        $errores .= 'Por favor agrega un nombre'; //errores  concatenado deeste texto
    }

    if (!empty($correo)){

        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); //SANEAMOS LE CADENA REMOVIENDO TODO LOS SIGNOS QUE NO DEBEN IR        
        //$correo = filter_var($correo, FILTER_VALIDATE_EMAIL); //validamos LE CADENA REMOVIENDO TODO LOS SIGNOS QUE NO DEBEN IR
        if ((filter_var($correo, FILTER_VALIDATE_EMAIL))) {
            echo 'tu correo es'. $correo . '</br>';
        }else{
            echo 'INCORRECTO INCORRECTO tu correo es'. $correo . '</br>';
        }
        

    }else{
        $errores .= 'Por favor agrega un correo valido'; //errores  concatenado deeste texto
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        //Validando envio de datos si no defino method por defecto es get
    -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" placeholder="Name" name="nombre">
        <br>
        <input type="text" placeholder="correo" name="correo">
        <!--CONDICIONAL EN PHP CON HTML PARA EJECUTAR O NO HTML DEL FRONT  si errores tiene contenido hau error --> 
        <?php if (!empty($errores)): ?>
            <div class="error"> <?php echo $errores ?> </div>
        <?php endif; ?>

        <br>
        <button type="submit" value="Enviar" name="submit">Enviar</button>         
    </form>
</body>
</html>