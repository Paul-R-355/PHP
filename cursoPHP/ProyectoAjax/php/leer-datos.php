<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');


    $conexion= new PDO('mysql:host=127.0.0.1;dbname=prueba_consola','root','');//los ultimos parametros son usuario y contrasenia
    //echo 'CONEXION OK </br>';

    //$resultados=$conexion->query('SELECT * FROM usuario;');//consultas sencillas sin concatenar la variable

    //foreach ($resultados as $key => $fila) {//iteramos los arreglos de filas
       //print_r($fila);
    //   echo 'nombre:'.$fila['nombre']. 'correo:'.$fila['email'].'</br>';
    //}


		$conexion->set_charset("utf8");
		//$resultados=$conexion->query('SELECT * FROM usuario;');//consultas sencillas sin concatenar la variable
		//$statement->execute();
		//$resultados = $statement->get_result();

		//select d.Pk_DetalleCave, d.CodigoQrCave, b.TipoPegado, c.Variedad, c.Origen, s.PruebaSiembra1, s.PruebaSiembra2, c.CodigoCali, s.Finca, s.BloqueSiembra, c.Destino, b.CalibrePegado, b.SemanaSiembraPegado, ca.SemanaCave, d.CantidadBulbosDetalle, ca.Af as AfCave, c.Bloque, c.Finca, b.CampoAdicional as Nota, ca.CampoAdicional1 from Calibracion c, Base b, Siembra s,Cave ca, DetalleCave d where s.FK_Base_Id = b.Pk_Base and b.FK_Calibracion_Pk = c.Pk_Calibracion and ca.Pk_Cave=d.FK_Cave_Id and ca.FK_Siembra_Pk=s.PK_Siembra and c.Destino ='Bulbos' and ca.SemanaCave = '2138' order by d.Pk_DetalleCave desc;
		$resultados = "SELECT * FROM usuario;";
		$ejecutar = $con->query($resultados);

		$i = 0;

		while ($fila = $ejecutar->fetch()) {

		
		$respuesta = [];
		
		while($fila = $ejecutar->fetch()){
			$usuario = [
				'id' 		=> $fila['id'],
				'nombre' 	=> $fila['nombre'],
				'edad'		=> $fila['uss'],
				'pais'		=> $fila['contrasenia'],
				'pais'		=> $fila['email']
			];
			array_push($respuesta, $usuario);
		}
	
	echo json_encode($respuesta);



//$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');
$conexion= new PDO('mysql:host=127.0.0.1;dbname=prueba_consola','root','');
/*
if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$resultados=$conexion->query('SELECT * FROM usuario;');//consultas sencillas sin concatenar la variable
	//$statement->execute();
	//$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $ejecutar->fetch()){
		$usuario = [
			'id' 		=> $fila['ID'],
			'nombre' 	=> $fila['nombre'],
			'edad'		=> $fila['edad'],
			'pais'		=> $fila['pais'],
			'correo'	=> $fila['correo']
		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta);
*/