<?php
//valor unico para el nombre de las carpetas temporales de los archivos
    $Object = new DateTime();  
    $DateAndTime = $Object->format("d-m-Y/h:i:s");
    echo $DateAndTime;

//formato parala consultar registros a imprimir en la semana actual
    echo "</br>";
    //SemanaSiembraPegado = '27-2021'
    echo $semana_siembra_pegado = date("W-Y");
      
?>