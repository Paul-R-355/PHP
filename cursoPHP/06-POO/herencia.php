<?php

class PersonaH{
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
        return $this->nombre . ' TIENE: ' . $this->edad . ' Pais: ' . $this->pais.' Y es un: '.$tipoVariable;
    }

}

class Estudiante extends PersonaH{
   
    public $carrera;

    function __construct( $nombre, $edad,$pais,$carrera){
        parent::__construct($nombre,$edad,$pais);//traigo ... nombre edad y pais del padre
        //$this->nombre= $nombre;
        //$this->edad=$edad;
        //$this->pais=$pais;
        $this->carrera=$carrera;
    }

}

//instancia de la clase
$paul=new PersonaH('Paul',25,'Ecuador');
//seteo valores -
//$paul->nombre='Paul';
//$paul->edad=23;
//$paul->pais='Ecuador';
//llamada al metod
echo $paul->mostraInformacion((string) gettype($paul));

echo '</br>';

//instancia de la clase
$luis=new Estudiante('luis',50,'Mexico','Dev');
echo $luis->mostraInformacion(gettype($luis));
echo '</br> Soyt un obj, estudiante d la carrera'.$luis->carrera;

?>