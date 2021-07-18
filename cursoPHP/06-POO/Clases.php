<?php

$nombre='Carlos';
$edad=23;
$pais='Ecuador';

class Persona{
    public  $nombre='Carlos';
    public  $edad=23;
    public  $pais='Ecuador';

    public function mostraInformacion(){
        echo 'hola mundo </br>';
    }

}
//instancia de la clase
$paul=new Persona();
//seteo valores -
$paul->nombre='Paul';
$paul->edad=23;
$paul->pais='Ecuador';
//llamada al metod
$paul->mostraInformacion();

echo $paul->nombre . ' TIENE: ' . $paul->edad . ' Pais: ' . $paul->pais;

?>