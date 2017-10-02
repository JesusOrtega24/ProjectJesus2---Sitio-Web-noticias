<?php
	
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['asunto']) && !empty($_POST['asunto']) &&
	isset($_POST['mensaje']) && !empty($_POST['mensaje']))
	{

	// include('conexion2.php');

	$destino = "jesustoxort@gmail.com"; 
	
	$desde = "FROM:". "CETis Noticias";

	$nombre = $_POST['nombre'];

	$email = $_POST['email'];

	$asunto = $_POST['asunto'];

	$mensaje = $_POST['mensaje'];

	$mensajecompleto = "De: ".$nombre."<br>"."Correo: ".$email."<br>"."<br>"."Mensaje : ".$mensaje;


	mail($destino, $asunto, $mensaje, $desde);

	header("Location: ../Acerca_de.php");
	
	// echo $mensajecompleto;

	} else {

		echo "Problemas al enviar";

	}

?>