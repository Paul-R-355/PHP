<?php
//con Post recivo arreglo y el arreglo tiene el nombre $_Post
//un post no envia por url los valores pasados 
//permite enviar archivos
//si uso info que el usuario no pueda acceder para info sencible

//con GET recivo arreglo y el arreglo tiene el nombre $_Get usado para traer info y mostrarla nunca para la base
//un get SI envia por url los valores pasados
//NO permite enviar archivos

if($_POST){ // si hay valores ejecuto

    print_r($_POST);
    echo $nombre=$_POST['nombre'];
    echo $sexo=$_POST['sexo'];
    echo $AnioNacimineto=$_POST['Anio_Nacimineto'];
    echo $terminos=$_POST['terminos'];

    echo 'Hola'. $nombre . 'eres' . $sexo;

}else{ //redirijo a donde desee si no hay valores en POST
    header('Location: http://http://localhost/cursoPHP/04-formularios/');
}
// Envio de datos con metodo get
/*
if($_GET){ // si hay valores ejecuto

    print_r($_GET);
    echo $nombre=$_GET['nombre'];
    echo $sexo=$_GET['sexo'];
    echo $AnioNacimineto=$_GET['Anio_Nacimineto'];
    echo $terminos=$_GET['terminos'];

    echo 'Hola'. $nombre . 'eres' . $sexo;

}else{ //redirijo a donde desee
    header('Location: http://http://localhost/cursoPHP/04-formularios/');
}

*/




?>