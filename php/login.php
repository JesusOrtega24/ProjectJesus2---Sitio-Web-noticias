<?php

session_start();

if(isset($_POST['user']) && !empty($_POST['user']) &&
   isset($_POST['pw']) && !empty($_POST['pw']))
{

	include('conexion2.php');
	$sel = mysql_query("SELECT Username,Password FROM administradores WHERE Username = '$_POST[user]'",$con);
	$session = mysql_fetch_array($sel);
	if ($_POST['pw'] == $session['Password']){
		$_SESSION['ADMIN'] = $_POST['user'];
			header("Location: restringida.php");
	} else {
		header("Location: ../LoginCEDAI.php");
	}
} else {
	echo "Verifica que llenaste los campos";
}
?>