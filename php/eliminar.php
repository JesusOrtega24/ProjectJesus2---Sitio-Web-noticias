<?php 

include('conexion2.php');

$registro=mysql_query("SELECT id from noticias WHERE Nombre = '$_POST[nombre]'",$con);

if ($reg=mysql_fetch_array($registro)) {
	
mysql_query("DELETE from noticias WHERE Nombre = '$_POST[nombre]'", $con);

header("Location: restringida.php");

} else {

	echo "no se pudo eliminar";

}

 ?>