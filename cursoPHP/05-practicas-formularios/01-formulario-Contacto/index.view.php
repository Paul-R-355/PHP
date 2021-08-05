<?php
include('C:/xampp/htdocs/cursoPHP/transformar-textoAimg.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">

    <title>Document</title>
</head>
<body>
    <div class="wrap"> <!--Contenedor general-->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
            <input type="text" name="nombre" class="form-control" placeholder="NOMBRE:" value="<?php  if(!$enviado && isset($nombre)) echo $nombre; ?>" id="nombre">

            <input type="text" name="correo" class="form-control" placeholder="CORREO:" value="<?php  if(!$enviado && isset($correo)) echo $correo; ?>" id="correo">

            <textarea name="mensaje" id="" class="form-control" placeholder="mensaje" cols="30" rows="10" value="<?php  if(!$enviado && isset($mensaje)) echo $mensaje; ?>" ></textarea>
            <!--Mensaje de exito o error-->
            <?php if(!empty($errores)) : ?>

            <div class="alert error">
            <?php echo $errores?>
                El mensaje NO se envio
            </div>
            <?php elseif($enviado) : ?>
            <div class="alert succsess">
                El mensaje SI se envio de forma correcta
            </div>
            <?php endif ?>
            
            <input type="submit" name="submit" class="btn btn-primary" onclick="ImagenSemanaSiembra()">

            <script>
             function ImagenSemanaSiembra(){
                console.log('<?php echo $recepcio=ImagenSemanaSiembra('27-2021 indexview 20+','temp1/','IMAGE.png'); ?>');
            }
            </script>
        </form>
    </div>
</body>
</html>
