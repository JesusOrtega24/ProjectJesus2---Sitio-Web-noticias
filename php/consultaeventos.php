<?php 
	session_start();

	include('conexion2.php');
	
	if (isset($_SESSION['ADMIN'])) {

		if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
			isset($_POST['contenido']) && !empty($_POST['contenido']) &&
			isset($_POST['autor']) && !empty($_POST['autor']) &&
			isset($_POST['fecha']) && !empty($_POST['fecha'])) {

			$NOMBRE = $_POST['nombre'];
			$CONTENIDO = $_POST['contenido'];
			$AUTOR = $_POST['autor'];
			$FECHA = $_POST['fecha'];

			$carpeta = "imagenesnoticias/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen']['name'];
			copy($_FILES['imagen']['tmp_name'],$destino);
			$NOMBREI=$_FILES['imagen']['name'];

			mysql_query("INSERT INTO eventos (Nombre,Contenido,Imagen,Autor,Fecha) VALUES ('$NOMBRE','$CONTENIDO','$NOMBREI','$AUTOR','$FECHA')",$con);

			header("Location: restringida.php");

		} else {
			echo "verifica que llenaste los campos correspondientes";
		}

	} else {
		echo "no has iniciado sesion, por favor inicia sesion";
	}
?>