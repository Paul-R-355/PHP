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
        action: especificamos a donde enviar datos
        method: metodo de envio -- POST -- GET
        ESTOS DOS ANTERIORES SIEMPRE EN EL FORM

        name: para conectar valores con php obtenemos le valor del input por ejemplo
        id:sirve para establecer con javascript que siertas cosas pasen
        class: darle atributos a elementos html
        value: es el valor que se envia!!

        submit: esto permite que al presionar el boton se envian los datos
    -->
    <form action="recibe.php" method="POST">
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