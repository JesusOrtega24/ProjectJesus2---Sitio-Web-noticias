<?php 

try {
  	$con = new PDO('mysql:host=localhost;dbname=cedai', 'root', '');
	} catch (PDOException $e) {
  	echo "Error: " . $e->getMessage();
	}
 ?>
