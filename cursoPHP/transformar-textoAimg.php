<?php
//Funcion que genera una imagen a partir del texto ingresado 
function ImagenSemanaSiembra(string $texto,string $path,string $nombre_imagen):string{

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    //Definir contenido
    //header('Content-Type: image/png');
    // Seleccionar fuente
    //$fuente = realpath(".")."\\ARBLI.ttf";
    $fuente = realpath("/xampp/htdocs/cursoPHP/05-practicas/01-formulario-Contacto/Funetes-PHP/")."\\ARBLI.ttf";

    $tamanio=array('ancho'=>400,'alto'=>50); 
    //$texto = '27-2021     20+';
    $im = imagecreatetruecolor($tamanio['ancho'], $tamanio['alto']);
    // Creando colores
    $blanco = imagecolorallocate($im, 255, 255, 255);
    $negro = imagecolorallocate($im, 0, 0, 0);
    // crear imagen 
    imagefilledrectangle($im, 0, 0, $tamanio['ancho'], $tamanio['alto'], $blanco);
    // Añadiendo y ubicando texto en imagen
    imagettftext($im, 30, 0, 10, 35, $negro, $fuente, $texto);
    //imagepng($im,$path.'IMAGE.png');
    imagepng($im,$path.$nombre_imagen);
    imagedestroy($im);
    return $path.$nombre_imagen;
}
?>