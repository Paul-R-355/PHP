<?php
//Primera forma
//valido si los datos an sido enviados   Si solo tienes un formulario que comprobra usa esta es mejor.
if ($_SERVER['REQUEST_METHOD']=='GET') {
    echo 'se envio por get';
} else {
    echo 'se envio por POST';
}

//Segunda forma darle un valor al boton con tipo submit EJ:   <button type = "submit" name="submit"> 
// INMPORTANTE -- aqui por el valor de submit se que formulario esta llegando

if (isset($_GET['submit'])) {
    echo 'Se han enviado los valores';
} else {
    echo 'NO se han enviado los valores';
}

?>