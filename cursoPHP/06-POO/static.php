<?php
//static permite acceder a propiedades y metodos sin instanciarlas
class PersonaSt{
    public  $dia='7 de septiembre';
    public static  $mes='Agosto';

    function __construct(
        $dia        
    ){
        $this->dia= $dia;        
    }

    public function saludo(){//cons this acemos referenacia a esa clase
        return 'Hola buen dia';
    }

    public static function saludoEstatico($nombre=null){//nombre por defecto sera null  entonces si paso o no nombre saldra una de 
        if ($nombre){                                   //salida u otra
            return 'Hola buen dia'.$nombre;
        }else{
            return 'Hola buen dia';
        }
    }
}

echo PersonaSt::$mes; ///acedo al velor sin instanmcia un objeto tipo persona
echo PersonaSt::saludoEstatico();
echo PersonaSt::saludoEstatico('Paul');

//instancia de la clase
$paul=new PersonaSt('7 de septiembre');
echo $paul->saludo();
echo $paul->dia;
?>