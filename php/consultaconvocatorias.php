<?php 
	session_start();

	include('conexion2.php');
	
	if (isset($_SESSION['ADMIN'])) {

		if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
			isset($_POST['contenido']) && !empty($_POST['contenido']) &&
			isset($_POST['fecha']) && !empty($_POST['fecha'])) {

			$NOMBRE = $_POST['nombre'];
			$CONTENIDO = $_POST['contenido'];
			$FECHA = $_POST['fecha'];

			$carpeta = "../documentos/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['documento']['name'];
			copy($_FILES['documento']['tmp_name'],$destino);
			$NOMBRED=$_FILES['documento']['name'];

			mysql_query("INSERT INTO convocatorias (Nombre,Contenido,Fecha,Documento) VALUES ('$NOMBRE','$CONTENIDO','$FECHA','$NOMBRED')",$con);

			// mysql_query("INSERT INTO convocatorias (Nombre,Contenido,Fecha,Documento) VALUES ('$NOMBRE','$CONTENIDO','$NOMBREI','$AUTOR','$FECHA')",$con);

			header("Location: restringida.php");

		} else {
			echo "verifica que llenaste los campos correspondientes";
		}

	} else {
		echo "no has iniciado sesion, por favor inicia sesion";
	}
?>
