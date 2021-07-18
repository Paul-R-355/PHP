<?php

class UsuarioCM{
    public $nombre;
    public $correo;

    function __construct($nombre,$correo){
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public function mostrarNombre(){
        echo 'Tu nombre es: '.$this->nombre . '</br>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Tu correo es: '.$this->correo . '</br>';
        return $this;
    }

}

$paul= new UsuarioCM('Paul','paulreinoso@outlook.com');

//$paul->mostrarNombre();
//$paul->mostrarCorreo();

//podemos encadenar metodos si retornamos el this en los metodos creados en la clase  //Framework de php LARABEL
$paul->mostrarNombre()->mostrarCorreo();

?>