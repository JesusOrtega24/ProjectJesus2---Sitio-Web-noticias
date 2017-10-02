<?php

$host = "localhost";
$user = "root";
$pw = "";
$db = "cedai";

$con = mysql_connect('localhost','root','') or die ("Problemas al conectar servidor");
	mysql_select_db($db,$con) or die ("Problemas al conectar con base de datos");

?>