<!DOCTYPE html>
<html>
<head>
	<title>CETis 67 - Resultados de Busqueda</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/Estilosbusqueda.css">
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
<span class="ir-arriba icon-circle-up"></span>
<section class="bloque">
	<h2>CETIS 67 "DANIEL CABRERA RIVERA"</h2>
</section>
<header>
	<div class="menu_bar">
		<a href="#" class="bt-menu"><span class="icon-menu3"></span>Menu</a>
	</div>
	<nav id="encabezado">
		<ul>
			<li><a href="../Index.php#encabezado">Noticias</a></li>
			<li><a href="../Avisos.php#encabezado">Avisos</a></li>
			<li><a href="../Eventos.php#encabezado">Eventos</a></li>
			<li><a href="../Convocatorias.php#encabezado">Covocatorias</a></li>
			<li><a href="../Acerca_de.php#encabezado">Acerca de</a></li>
				<button class="botonsesion">
					<a href="LoginCEDAI.php"><center>&#128100; Sesion Administrativa</center></a>
				</button>
			<div id="navigation-bar" class="clearfix">
			<form id="search" action="buscarNAEC.php" method="post">
                <div id="label"><label class="icon-search" id="search-label"></label></div>
   	            <div id="input"><input type="text" name="busqueda" placeholder="Buscar..."></div>
       	    </form>
			</div>
		</ul>
	</nav>
</header>
<section class="container">
	<aside>
		<img src="../imagenes/DGETI_logos.jpg" width="100%"><br><br>
		<div class="titular">
			<hr font size=3 color="#424242" width="90%" style="margin: 10px 5%;"><br>
			<h2>Resultados de Busqueda</h2>
		</div>
		<ul>
		<center>
			<h2>Enlaces de Interés</h2><br>
		</center>
			<li><a href="http://www.dgeti.sep.gob.mx">DGETI</a></li>
			<li><a href="http://www.gob.mx/sep">SEP</a></li>
			<li><a href="http://www.sems.gob.mx">SEMS</a></li>
			<li><a href="http://www.imss.gob.mx">IMSS</a></li>
			<li><a href="http://www.gob.mx/prospera">PROSPERA</a></li>
		</ul><br>
		<hr font size=3 color="#424242" width="90%" style="margin: 10px 5%;"><br>
		<div class="soporte">
			<center>
				<h2>Soporte Técnico</h2><br>
			</center>
			<p>Celular: 22 26 77 03 10 <br>Correo electrónico: jesustoxquior.24@outlook.es</p><br>
			<center>
				<h2>Comentarios</h2><br>
			</center>
			<form action="enviarcomentario.php" method="post">
				<p>Sientase en la libertad de expresar alguna queja, sugerencia o comentario. Tenga por seguro que le daremos el debido seguimiento a su inquietud.</p><br>
				<textarea class="textarea" name="comentarios" rows="10" cols="80"></textarea><br><br>		
				<input type="submit" value="Enviar">
			</form>
		</div>
		<center>
		<div class="contactos">
			<a href="https://www.facebook.com/Cetis67Cholula?ref=ts&fref=ts" target="_blank" class="icon-facebook"></a>
			<a href="#" target="_blank" class="icon-twitter"></a>
			<a href="#" target="_blank" class="icon-whatsapp"></a>
		</div><br>
		<div class="boton"><a href="../LoginCEDAI.php"><center>Panel Administrativo</center></a></div>			
		</center>
	</aside>
	<section class="articles">
	<h2 class="encabezado">Resultados de la busqueda</h2>
		<?php 

			if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {

				$BUSQUEDA = $_POST['busqueda'];
			
				include('conexion.php');
				
				$res = $con->query ("SELECT * from noticias WHERE Nombre LIKE '%".$BUSQUEDA."%'");

				// $res = $con->query ("ORDER BY id DESC");

				foreach ($res as $row) 
				{ 
		?>
				<article>
					<img src="imagenes/<?php echo $row[3]?>">
					<h2><?php echo $row[1]?></h2><br>
					<p><?php echo $row[2]?></p><br>
					<p><?php echo $row[4]?></p><br>
					<p><?php echo $row[5]?></p>
				</article>			
		<?php
				}
		
			}
	
		?>

		<?php 

			if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {

				$BUSQUEDA = $_POST['busqueda'];
			
				try { $con = new PDO('mysql:host=localhost;dbname=cedai', 'root', '');
					} catch (PDOException $e) {
  					echo "Error: " . $e->getMessage();
					}
					$res = $con->query ("SELECT * from eventos WHERE Nombre LIKE '%".$BUSQUEDA."%'");

				foreach ($res as $row) 
				{ 
		?>
				<article>
					<img src="imagenes/<?php echo $row[3]?>">
					<h2><?php echo $row[1]?></h2><br>
					<p><?php echo $row[2]?></p><br>
					<p><?php echo $row[4]?></p><br>
					<p><?php echo $row[5]?></p>
				</article>			
		<?php
				}
		
			}
	
		?>
		<?php 

			if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {

				$BUSQUEDA = $_POST['busqueda'];
			
				try { $con = new PDO('mysql:host=localhost;dbname=cedai', 'root', '');
					} catch (PDOException $e) {
  					echo "Error: " . $e->getMessage();
					}
					$res = $con->query ("SELECT * from avisos WHERE Nombre LIKE '%".$BUSQUEDA."%'");

			foreach ($res as $row) 
			{ 
		?>
			<article>
				<h2><?php echo $row[1]?></h2><br>
				<p><?php echo $row[2]?></p><br>
				<p><?php echo $row[3]?></p><br>
				<p><?php echo $row[4]?></p>
			</article>		
		<?php
				}
		
			}
	
		?>
	</section>
</section>
	<footer>
		<section class="footer">
			<p>Centro de Estudios Tecnológicos Industrial y de Servicios No.67  "Daniel Cabrera Rivera"</p> 
			<p>Prol. Av. Hidalgo S/N San Cristóbal Tepontla, San Pedro Cholula, Pue.  C.P. 72760 (Apartado Postal 140)</p>
			<p>Tel/Fax. (01222) 2472659 - 2476872  <a href="cetis067_dir@dgeti.sems.gob.mx">E-mail cetis067_dir@dgeti.sems.gob.mx</a></p>
			<p>C.E.D.A.I. Consulta escolar de datos y administración de información</p> 
			<p><span class="copyright">&copy; Todos los derechos Reservados | </span><a href="../Acerca_de.php#encabezado" class="AcercaDe">Acerca de</a></p>
		</section>	
	</footer>
</body>
</html>