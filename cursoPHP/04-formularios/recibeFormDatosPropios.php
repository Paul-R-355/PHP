<?php
//*************************************************Enviando datos a la misma pagina en la que me encuentro
//1. dejar acction vacio y llamar al post en sitio
/*
para pedir valor
if ($_POST){
    echo $_POST['nombre'];
}
en el formulario
<form action="" method="POST">
*/

//de forma dinamica insertamos php en el action usando variable $_SERVER
//2 podemos usar una variable super global con el path del script y el valor    **MAS ACONSEJABLE**
/*
para pedir valor
if ($_POST){
    echo $_POST['nombre'];
}
en el formulario
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
*/

if ($_POST){
    echo $_POST['nombre'];
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
//Enviando datos a la misma pagina en l a que me encuentro
//1. dejar acction vacio
    -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" placeholder="Name" name="nombre">
        <br>
        <!--Para que los radio se vinculen su name debe ser igual-->
        <label for="hombre">Hombre</label>
        <input type="radio" value="hombre" name="sexo" id="hombre">
        
        <label for="mujer">Mujer</label>
        <input type="radio" value="mujer" name="sexo" id="mujer">
        <br>
        <!--value es lo que se envia con php y lo otro es lo que se vera por pantalla-->
        <select name="Anio_Nacimineto" id="">
            <option value="2000">2000</option>
            <option value="2000">2001</option>
            <option value="2000">2002</option>
            <option value="2000">2003</option>
        </select>
        <br>
        <label for="terminos">Aceptar</label>
        <input type="checkbox" name="terminos" id="terminos" value="true">
        <br>
        <button type="submit" value="Enviar">Enviar</button>
    </form>
</body>
</html>