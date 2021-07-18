<?php

//private solo accedidos en la clase creada
//protected accedidos desde dentro de laas cases y heredero 
//public accedidis de cualquier parte
class Usuario{
    public  $nombre;
    public  $correo;

    function __construct(
        $nombre,
        $correo
    ){
        $this->nombre= $nombre;
        $this->correo=$correo;
    }

    public function mostraInfo(){//cons this acemos referenacia a esa clase
        return $this->correo;
    }

}

class Miembro extends Usuario{
   
    public $carrera;

    function __construct( $nombre, $correo,$carrera){
        parent::__construct($nombre, $correo,);//traigo ... nombre edad y pais del padre
        //$this->nombre= $nombre;
        //$this->edad=$edad;
        //$this->pais=$pais;
        $this->carrera=$carrera;
    }

}

//instancia de la clase
$paul=new Miembro('Paul','paulreinoso_ares@outlook.com','dev');
//seteo valores -
//$paul->nombre='Paul';
//$paul->edad=23;
//$paul->pais='Ecuador';
//llamada al metod
echo $paul->mostraInfo((string) gettype($paul));

?>