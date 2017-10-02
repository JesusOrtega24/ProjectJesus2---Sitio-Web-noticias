<!DOCTYPE html>
<html lang="es">
<head>
	<title>PANEL ADMINISTRADOR</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/EstilosPanelAdm.css">
	<link rel="stylesheet" type="text/css" href="../css/EstilosMenu.css">
	<link rel="stylesheet" href="../css/irarriba.css">
	<link rel="stylesheet" href="../fonts/fonts.css">
	<link rel="shortcut icon" href="../iconos/2.ico">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../js/arriba.js"></script>
	<script src="../js/menujquery-latest.js"></script>
	<script src="../js/menu.js"></script>
</head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['ADMIN'])){
			include('conexion2.php');
		} else {
			
		}
	?>
<span class="ir-arriba icon-circle-up"></span>
<section class="bloque">
	<h2>PANEL ADMINISTRACIÓN</h2>
</section>
<header>
	<div class="menu_bar">
		<a href="#" class="bt-menu"><span class="icon-menu3"></span>Menu</a>
	</div>
	<nav>
		<ul>
			<li><a href="../Index.php#encabezado">Noticias</a></li>
			<li><a href="../Avisos.php#encabezado">Avisos</a></li>
			<li><a href="../Eventos.php#encabezado">Eventos</a></li>
			<li><a href="../Convocatorias.php#encabezado">Covocatorias</a></li>
			<li class="close"><a href="closelogin.php">Cerrar Sesion</a></li>
			<?php 
				if (isset($_SESSION['ADMIN'])){
				echo "<li class=\"estado\"><a href=\"#\">ESTADO<span style=\"color: #00ff00\" class=\"icon-user\"></span></a></li>";
				} else {
				echo "<li class=\"estado\"><a href=\"#\">ESTADO<span style=\"color: #ff0000\" class=\"icon-user\"></span></a></li>";
				}
			?>
			<div id="navigation-bar" class="clearfix">
			<form id="search" action="php/buscarNAEC.php" method="post">
                <div id="label"><label class="icon-search" id="search-label"></label></div>
   	            <div id="input"><input type="text" name="busqueda" placeholder="Buscar..."></div>
       	    </form>
			</div>
		</ul>
	</nav>
</header>
<section class="container">
	<section class="articles">
		<article>
			<center>
				<h2>Panel Administrativo</h2><br>
			</center>
			<?php
				if (isset($_SESSION['ADMIN'])){ 
				$USERNAME = $_SESSION['ADMIN'];
				$USUARIO = mysql_query("SELECT Username FROM administradores WHERE Username = '$USERNAME'",$con);
				$user = mysql_fetch_array($USUARIO);
				echo " BIENVENIDO PROF: ".$user[0]." <br>"." <br>";
				echo "Acontinuación se le presentan algunas de las herramientas para la gestion y actualizacion de la pagina de noticias del Centro de Estudios Tecnológicos Industrial y de Servicios #67 \"Daniel Cabrera Rivera\""." <br>"." <br>"."importante: la información aqui publicada debe ser de caracter oficial";
				} else {
				}
			?>
		</article>
		<article>
			<?php

				if (isset($_SESSION['ADMIN'])) {
				echo "<form action=\"eliminar.php\" method=\"post\">";
				echo "<h2>Borrar archivos</h2>";
				echo "<input type=\"text\" name=\"nombre\" placeholder=\"nombre de la publicacion\">"."<br>";
				echo "<input type=\"submit\" value=\"Borrar Publicación\">";
				echo "</form>";
				} else {
				}
			?>
		<?php 
		if (isset($_SESSION['ADMIN'])) {

			echo "<form action=\"consultanoticias.php\" method=\"post\" enctype=\"multipart/form-data\">"."<br>";
			echo "<h2>Publicar Noticia</h2>"."<br>";
			echo "<input type=\"text\" name=\"nombre\" placeholder=Titulo>";
			echo "<textarea name=\"contenido\" placeholder=Contenido></textarea>";
			echo "<input type=\"file\" name=\"imagen\"value=\"subir imagen>\".\"<br>";
			echo "<input type=\"text\" name=\"autor\" placeholder=Autor(es)>"."<br>";
			echo "<input type=\"text\" name=\"fecha\" placeholder=Fecha>"."<br>";
			echo "<input type=\"submit\" value=\"Publicar noticia\">";
			echo "</form>";	

			echo "<form action=\"consultaavisos.php\" method=\"post\">"."<br>";
			echo "<h2>Publicar Aviso</h2>"."<br>";
			echo "<input type=\"text\" name=\"nombre\" placeholder=Titulo>";
			echo "<textarea name=\"contenido\" placeholder=Contenido></textarea>";
			echo "<input type=\"text\" name=\"autor\" placeholder=Autor(es)>"."<br>";
			echo "<input type=\"text\" name=\"fecha\" placeholder=Fecha>"."<br>";
			echo "<input type=\"submit\" value=\"Publicar aviso\">";
			echo "</form>";

			echo "<form action=\"consultaeventos.php\" method=\"post\" enctype=\"multipart/form-data\">"."<br>";
			echo "<h2>Publicar Evento</h2>"."<br>";
			echo "<input type=\"text\" name=\"nombre\" placeholder=Titulo>";
			echo "<textarea name=\"contenido\" placeholder=Contenido></textarea>";
			echo "<input type=\"file\" name=\"imagen\">";
			echo "<input type=\"text\" name=\"autor\" placeholder=Autor(es)>"."<br>";
			echo "<input type=\"text\" name=\"fecha\" placeholder=Fecha>"."<br>";
			echo "<input type=\"submit\" value=\"Publicar Evento\">";
			echo "</form>";

			echo "<form action=\"consultaconvocatorias.php\" method=\"post\" enctype=\"multipart/form-data\">"."<br>";
			echo "<h2>Publicar Convocatoria</h2>"."<br>";
			echo "<input type=\"text\" name=\"nombre\" placeholder=Titulo>"."<br>";
			echo "NOTA: los documentos a subir no deben exeder 8 Mb de peso";
			echo "<input type=\"file\" name=\"documento\">";
			echo "<textarea name=\"contenido\" placeholder=Descripcion de la convocatoria></textarea>";
			echo "<input type=\"text\" name=\"fecha\" placeholder=Fecha>"."<br>";
			echo "<input type=\"submit\" value=\"Publicar Documento\">";
			echo "</form>";

		} else {

		}
		?>
		</article>
	</section>
</section>
</body>
</html>