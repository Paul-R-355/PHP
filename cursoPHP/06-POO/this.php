<?php

class Persona{
    public  $nombre;
    public  $edad;
    public  $pais;

    public function mostraInformacion(){//cons this acemos referenacia a esa clase
        echo $this->nombre . ' TIENE: ' . $this->edad . ' Pais: ' . $this->pais;
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

echo '</br>';

//instancia de la clase
$luis=new Persona();
//seteo valores -
$luis->nombre='luis';
$luis->edad=50;
$luis->pais='Mexico';
//llamada al metod
$luis->mostraInformacion();


?>