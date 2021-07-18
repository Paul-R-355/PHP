<?php

class PersonaConstructor{
    public  $nombre;
    public  $edad;
    public  $pais;

    function __construct(
        $nombre,
        $edad,
        $pais
    ){
        $this->nombre= $nombre;
        $this->edad=$edad;
        $this->pais=$pais;
    }

    public function mostraInformacion(string $tipoVariable){//cons this acemos referenacia a esa clase
        echo $this->nombre . ' TIENE: ' . $this->edad . ' Pais: ' . $this->pais.' Y es un: '.$tipoVariable;
    }

}
//instancia de la clase
$paul=new PersonaConstructor('Paul',25,'Ecuador');
//seteo valores -
//$paul->nombre='Paul';
//$paul->edad=23;
//$paul->pais='Ecuador';
//llamada al metod
$paul->mostraInformacion((string) gettype($paul));

echo '</br>';

//instancia de la clase
$luis=new PersonaConstructor('luis',50,'Mexico');
//seteo valores -
//$luis->nombre='luis';
//$luis->edad=50;
//$luis->pais='Mexico';
//llamada al metod
$luis->mostraInformacion(gettype($luis));


?>