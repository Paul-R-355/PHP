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
    <form action="validaEnvio.php" method="GET">
        <input type="text" placeholder="Name" name="nombre">
        <br>
        <input type="text" placeholder="correo" name="correo">
        <br>
        <button type="submit" value="Enviar" name="submit">Enviar</button>         
    </form>
</body>
</html>