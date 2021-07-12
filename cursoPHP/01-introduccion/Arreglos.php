<?php

//Arreglos simples
echo '<h1>Arreglos simples</h1>';

$arreglo_strings = array('lunes','Martes','Miercoles','Jueves','Viernes');
echo $arreglo_strings[0];

$arreglo = [];
$arreglo = [1,2,2,3,4,5,6];
$arreglo[6]=25;
echo $arreglo[0] .'<br/>' ;
echo $arreglo[1] .'<br/>' ;
echo $arreglo[2] .'<br/>' ;
echo $arreglo[3] .'<br/>' ;
echo $arreglo[4] .'<br/>' ;
echo $arreglo[5] .'<br/>' ;
echo $arreglo[6] .'<br/>' ;

//Arreglos Asociativos

echo '<h1>Arreglos Asociativos</h1>';

$arreglo_asociativo=array('Precio'=>3.25,'Dia'=>"Lunes",'Mes'=>"Abril",'Hora'=>"21:00",'Nombre'=>"Paul");
echo '<h3>' . $arreglo_asociativo['Nombre'].'<?h3> <br/>';
echo '<h3>' . $arreglo_asociativo['Hora'].'<?h3> <br/>';
echo '<h3>' . $arreglo_asociativo['Precio'].'<?h3> <br/>';
$arreglo_asociativo['Nombre']='Paul Reinoso';
echo '<h3> El nuevo formato de nombre es: ' . $arreglo_asociativo['Nombre'].'<?h3> <br/>';

//Arreglos Multidimencionales

echo '<h1>Arreglos Multidimencionales</h1>';

$arreglo_multidimensional=array(
    array('Nombre'=>'Juan','Apellido'=>'Lopes','Edad'=>'35'),
    array('Nombre'=>'Luis','Apellido'=>'Perez','Edad'=>'35'),
    array('Nombre'=>'Marco','Apellido'=>'Andrade','Edad'=>'35'),
    array('Nombre'=>'Julian','Apellido'=>'Soria','Edad'=>'35'),
);

echo $arreglo_multidimensional[0]['Nombre'].'<?h3> <br/>';
echo $arreglo_multidimensional[1]['Apellido'].'<?h3> <br/>';
echo $arreglo_multidimensional[2]['Edad'].'<?h3> <br/>';
echo $arreglo_multidimensional[3]['Nombre'].'<?h3> <br/>';


//Arreglos indices

echo '<h1>Arreglos Operadores</h1>';

$arreglo_mese=array(
    'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
);

echo '# MESES '. count($arreglo_mese).'<br/>';
echo 'ultimo mes indice '. $ultimo_mes = (count($arreglo_mese) - 1).'<br/>';
echo 'ultimo mes valor '. $arreglo_mese[ (int) $ultimo_mes] .' <br/>';

//Recorrer areglos Operadores para arreglos FOR EACH 

echo '<h1>Recorrer areglos FOR EACH</h1>';

$arreglo_mese=array(
    'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'
);
?>
<!--FOR EACH-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>    
    <?php
    foreach($arreglo_mese as $indice => $mes) {
        echo '<li> Indice: '. $indice .'Mes: '. $mes .'</li>';
    }
    ?>
    </ul>
</body>
</html>

<?php
//Ordenar arreglos //SORT

echo '<h1>Ordenar arreglos </h1>';
    sort($arreglo_mese);
    rsort($arreglo_mese);
?>

<!--FOR EACH-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>    
    <?php
    foreach ($arreglo_mese as $indice => $mes) {
        echo '<li>'. $mes .'</li>';
    }
    ?>
    </ul>
</body>
</html>