<?php
 abstract class PersonaA{//para protejer clases sirve para No acceder a una clase, a menos que la heredemos!
                        //solo con l aherencia accedo a clases y metodos de esa clase abstracta heredandola
    public function saludo(){ 
        return 'Hola';
    }

}

class EstudianteA extends PersonaA{

}



$carlos = new EstudianteA();
echo $carlos->saludo();

?>
