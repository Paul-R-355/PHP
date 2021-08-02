<?php 
//se agrega sesionstart para todas las paginas que queramos trabajar sesiones
session_start();//creamos la sesion
$_SESSION['nombre']='Carlos';//variable que permite por medio del id se establece una sesion con id(nombre)
                            //ahora podemos trabajar esa sesion en otras paginas. Aqui defino que esta sesion es de Carlos

//sesion se pierde al cerrar el navegador web
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a pagina 2</a>
</body>
</html>