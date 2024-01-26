<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de producto</title>
	<link rel="icon" href="War-zone.png">
	<link rel="stylesheet" href="Alta.css">
</head>

<body>
	
	<div id="contenedor">
	
	<header>
		<div><a href="index.html"><img id="logo" src="War-zone.png"></div></a>
		</header>
		
		<nav>
			<ul class="menu-horizontal">
				<li><a href="index.html">Home</a></li>
				<li>
					<a href="categorias">Categorias</a>
					<ul class="menu-vertical">
						<li><a href="terror.html">Terror</a></li>
						<li><a href="Infantil.html">Infantil</a></li>
						<li><a href="Deportes.html">Deportes</a></li>
						<li><a href="Carreras.html">Carreras</a></li>
						<li><a href="Guerra.html">Guerra</a></li>
					</ul>	
				</li>
				<li><a href="contactanos.html">Contactanos</a></li>
			</ul>
			</nav>
<font aling="center">
<div id="mensaje"> 
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warzone";

$id_articulo=$_POST["id_articulo"];
$Nombre=$_POST["nomb"];
$Genero=$_POST["ge"];
$Descripcion=$_POST["des"];
$id_usuario=$_POST["id_usuario"];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Fallo la conexion: " . mysqli_connect_error());
}

$sql = "INSERT INTO juegos (id_articulo, Nombre, Genero, Descripcion, id_usuario)
VALUES('$id_articulo', '$Nombre', '$Genero', '$Descripcion', '$id_usuario')";

if (mysqli_query($conn, $sql)) {
 echo "Listo";
} else {
  echo "Error:No se pudo agregar el registro " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
	echo"<font aling='center'>";
	echo"<h2>El registro se agrego correctamente</h2>";
	echo"<h3><font aling='center'>ya puedes consultarlo</font></h3>";
	echo"</font>";
?> </div>
<a href="contactanos.html" target="_self" id="regresar"> Regresar</a>
	<footer>
			<div><p id="info">
				Ote. 4 23, Cuchilla del Tesoro, Gustavo A. Madero, 07900 Ciudad de México, CDMX</p></div>
			</footer>
		
		<aside>
				<a href="https://www.facebook.com/kalitree.cabanas/"  target="_blank"><div><img class="redes" src="face.png"></div></a>
				
				<a href="https://www.instagram.com/kali_tree/"  target="_blank"><div><img id="redess" src="insta.png"></div></a>
				
				<a href="https://www.google.com/intl/es-419/gmail/about/"  target="_blank"><div><img class="redes" src="correo.png"></div></a>
				
				<a href="https://www.whatsapp.com/?lang=es"  target="_blank"><div><img class="redes" src="wasa.png"></div></a>
				
				<a href="https://cabanaskalitree.com/?fbclid=IwAR0F9Y5X2nxEsUQDf_kkVP8Z8Sum9FhraGT7krA60ZKaveKX1JPcoJlmb_Y"  target="_blank"><div><img class="redes" src="icone.png"></div></a>
				
			</aside>
		
		</div>
</body>
</html>