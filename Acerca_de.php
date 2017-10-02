<!DOCTYPE html>
<html lang="es">
<head>
	<title>CETis 67 - Acerca de</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/EstilosAcercaD.css">
	<link rel="stylesheet" type="text/css" href="css/EstilosMenu.css">
	<link rel="stylesheet" href="css/irarriba.css">
	<link rel="stylesheet" href="fonts/fonts.css">
	<link rel="shortcut icon" href="iconos/2.ico">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/arriba.js"></script>
	<script src="js/menujquery-latest.js"></script>
	<script src="js/menu.js"></script>
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
			<li><a href="Index.php#encabezado">Noticias</a></li>
			<li><a href="Avisos.php#encabezado">Avisos</a></li>
			<li><a href="Eventos.php#encabezado">Eventos</a></li>
			<li><a href="Convocatorias.php#encabezado">Covocatorias</a></li>
			<li><a href="Acerca_de.php#encabezado">Acerca de</a></li>
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
		<h2 class="encabezado">ACERCA DE LA INSTITUCIÓN</h2>
	<article class="articlecetis">
		<h2>Centro de Estudios Tecnológicos Industrial y de Servicios #67 "Daniel Cabrera Rivera"</h2><br>
		<p>Centro de Estudios Tecnológicos Industrial y de Servicios #67, es una institución educativa oficial a nivel medio superior, dependiente de la DEGTI (Dirección General Tecnologia Industrial) que ofrece estudios de BACHILLERATO TECNOLOGICO en: PROGRAMACIÓN, CONSTRUCCIÓN Y CONTABILIDAD. Tambien ofrece una modalidad educativa bivalente de nivel medio superior para formar alumnos que deseen incorporarse a instituciones de nivel superior y/o al sector productivo, ya que al termino de tus estudios, obtendrás un certificado como Técnico en cualquiera de sus carreras.</p><br>
		<p>CETis 67. San Pedro Cholula, Puebla, cuyas raíces se remontan al año de 1980, conocida tambien porque constituye el pilar de la educación técnica e industrial en la región de San Pedro Cholula, como un medio educativo de vital importancia en el Estado.</p>
		<center>
			<img src="imagenes/CETis.jpg" class="cetis">
		</center>
	</article>
	<aside class="aside1">
		<h2>Logo de la institución</h2><br>
		<center>
			<img src="imagenes/logocetis.jpg" class="cetis" width="70%"><br>
		<h3>"Humildad en la grandeza para servir mejor"</h3><br><br>
		</center>
	<hr font size=3 color="#424242"><br>
	<h2>Ubicación</h2>
		<img src="imagenes/entrada cetis.jpg" width="100%"><br><br>
		<center>
			<div class="boton"><a href="https://maps.google.com.mx/maps?ie=UTF8&cid=9697473631835491291&q=CETis+67&gl=MX&hl=es-419&t=m&ll=19.069378,-98.3215&spn=0.012168,0.012875&z=15&source=embed">Ver el mapa</a></div>
		</center>
	</aside>
		<h2 class="encabezado1">ACERCA DEL DESARROLLADOR</h2>
	<article style="display: inline-block;">
		<center>
			<img src="imagenes/aboutme.jpg" class="aboutme">
		</center>
		<h3>Jesús Toxqui Ortega, estudiante de la Carrera Técnica en Programación del Centro de Estudios Tecnológicos Industrial y de Servicios #67 "Daniel Cabrera Rivera"</h3><br>
		<p>Hola, soy Jesús Toxqui Ortega, estudiante de tercer grado de preparatoria del CETis #67 y, como estudiante, he trabajado en varios proyectos como <a href="http://cedai.hol.es/CEDAI.html">CEDAI</a>, este proyecto participó como parte del consurso nacional de prototipos en la modalidad de software llegando hasta la etapa estatal.</p><br>
		<p>Actualmente sigo preparandome para ser Técnico en Programación y posteriormente estudiar Ingeniería en Sistemas Computacionales. Al mismo tiempo me especializo y profundizo temas en Desarrollo web (Front-end web development) y diseño web adaptable (responsive design).</p><br>
		<p>Este proyecto fué creado a partir de la falta de información y la ineficiencia de dar a conocerla, pretendiendo asi, brindar información de calidad y acceder a ella en cualquier momento y desde cualquier dispositivo, beneficiando a la mayor parte de la comunidad escolar, en especifico la comunidad estudiantil.</p>
		<div class="infocontacto">
				<h2>Formulario de Contacto</h2><br>
			</center>
			<form action="php/enviar.php" method="post">
				<input type="text" name="nombre" placeholder=" Nombre" required />
				<input type="email" name="email" placeholder="Email" required />
				<input type="text" name="asunto" placeholder="Asunto" required />
				<textarea class="textarea" name="mensaje" rows="10" cols="80" placeholder="Escriba aqui su mensaje" required /></textarea><br><br>	
				<input type="submit" value="Enviar">
			</form>
		</div>
		<div class="imagenpresentacion">
			<center>
				<img src="imagenes/presentacion.jpg" class="presentacion">
			</center>
			<div class="contactos">
			<a href="https://www.facebook.com/jesus.toxquiortega" target="_blank" class="icon-facebook"></a>
			<a href="https://www.linkedin.com/in/jes%C3%BAs-toxqui-ortega-02548614a/" target="_blank" class="icon-linkedin2"></a>
			<a title="222-2677-0310" class="icon-whatsapp"></a>
		</div><br>	
		</div>
	</article>
	</section>
</section>
	<footer>
		<section class="footer">
			<p>Centro de Estudios Tecnológicos Industrial y de Servicios No.67  "Daniel Cabrera Rivera"</p> 
			<p>Prol. Av. Hidalgo S/N San Cristóbal Tepontla, San Pedro Cholula, Pue.  C.P. 72760 (Apartado Postal 140)</p>
			<p>Tel/Fax. (01222) 2472659 - 2476872  <a href="cetis067_dir@dgeti.sems.gob.mx">E-mail cetis067_dir@dgeti.sems.gob.mx</a></p>
			<p>CETis Noticias, Informarte nunca fue tan facil ...</p> 
			<p><span class="copyright">&copy; Jesus Toxqui Ortega | </span><a href="Acerca_de.php#encabezado" class="AcercaDe">Acerca de</a></p>
		</section>	
	</footer>
</body>
</html>