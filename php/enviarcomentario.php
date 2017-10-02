<?php 

include('conexion2.php');

if(isset($_POST['comentarios']) && !empty($_POST['comentarios'])){

	$COMENTARIO = $_POST['comentarios'];

	mysql_query("INSERT INTO comentarios (Comentario) VALUES ('$COMENTARIO')",$con);

	header("Location: ../Index.php");

} else {

	echo "verifica que llenaste el campo";

}


 ?>