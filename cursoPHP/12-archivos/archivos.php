<?php
$path = realpath("/xampp/htdocs/CursoPHP-Udemy/PHP/cursoPHP/12-archivos/resources/")."\\documento.txt";

if(file_exists($path)){
echo "archivo existe";
}else{
    echo "archivo NOOOOOOOOOO existe";
}
echo '<br>';

//leo contenido del archivo
//echo file_get_contents($path);
echo '<br>';

//escribo contenido del archivo "aqui sobreescribo"
//echo file_put_contents($path,'HOLA COMO ESTAS NUEVO');

echo '<br>';
//escribo contenido del archivo "aqui sobreescribo"
//echo file_put_contents($path,"HOLA COMO ESTAS NUEVO AGREGADO \n", FILE_APPEND);

echo '<br>';

$archivo=file($path);
echo "<prev>";
print_r($archivo); 

echo $archivo[7] . "soy la linea index($archivo[7])";



?>