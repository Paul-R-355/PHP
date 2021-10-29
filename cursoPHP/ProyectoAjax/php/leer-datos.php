<?php
//conexion con ajax a base de datos
error_reporting(0);//si existe error este no se envia y no se muestra como respuesta
header('Content-type: application/json; charset=utf-8');
 
try {    
    $con = new PDO("sqlsrv:Server=192.168.146.7,1433;Database=SiembraBDD", "sa", "Sande01");    
	$consulta = "SELECT * FROM CALIBRACION;";
	$ejecutar = $con->query($consulta);
	
	$respuesta = [];//aqui estara toda la informacion

	while ($fila = $ejecutar->fetch()) {
		$calibracion = [
			'idCalibracion' 		=> $fila['Pk_Calibracion'],
			'calibreCave' 	=> $fila['CalibreCave'],
			'tipoCali'		=> $fila['TipoCalibracion'],
			'variedad'		=> $fila['Variedad'],
			'codigoCali'	=> $fila['Af']		
		];
		array_push($respuesta, $calibracion);//agrego los arregloes de datos a mi respuesta
	}	
	

} catch (PDOException $e) {
	$respuesta = [
		'error' => true
	];
    echo 'ERROR'. $e->getMessage();
}

echo json_encode($respuesta);