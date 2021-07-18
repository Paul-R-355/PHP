<?php
setcookie('font-size','40px',time()+60*60*24*365,'/'); //cookie que dura un anio ruta puede ser / o /admin para que l acarpeta admin sea donde este abil la kookie o habil para todo el dominio con /
//una cookie se retira con una fecha expirada
//setcookie('font-size','30px',time() - 60*60*24*365,'/');
//solo puedes guardar hasta 4MB de texto
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
    <h1>Cookies seteada</h1>
    <a href="texto.php">texto php</a>
</body>
</html>