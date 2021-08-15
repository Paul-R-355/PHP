<?php session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	// Nos conectamos a la base de datos
	try {
		$conexion= new PDO('mysql:host=127.0.0.1;dbname=prueba_consola','root','');//los ultimos parametros son usuario y contrasenia
		//echo 'CONEXION OK </br>';
	} catch (PDOException $e) {
		echo 'ERROR'. $e->getMessage();
		die();
	}

	//echo "SELECT * FROM usuario WHERE uss = '$usuario' AND contrasenia = '$password';";
	//die();

	$statement = $conexion->prepare('SELECT * FROM usuario WHERE uss = :usuario AND contrasenia = :pass');
	$statement->execute(array(
			':usuario' => $usuario,
			':pass' => $password
		));
	

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'views/login.view.php';

?>