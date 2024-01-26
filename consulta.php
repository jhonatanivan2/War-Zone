<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>war zone</title>
<link rel="icon" href="War-zone.png">
	<link rel="stylesheet" href="consulta.css">
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
				<li><a href="contactanos.html">Contactanos</a>
				<ul class="menu-vertical">
					<li><a href="contactanos.html">Crear cuenta</a></li>
						<li><a href="sesion.php">Inicio de sesi&oacute;n</a></li>
						<li><a href="Deportes.html">Quienes somos?</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		
		<section class="caja">

			
			<div class="contenedor">
				<div class="caja__columna">
					<svg> <rect></rect></svg>
					<div class="texto">
						<h2>Estimado usuario</h2>
						<p>Aqui podras consultar todos tus juegos que has registrado al igual que tus juegos favoritos</p>
						</div>
					</div>
				</div>

<font face="arial"><br><br><br>
<center><h1> Consulta tus juegos </center></h1><br><br>
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "warzone";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die("Error con la
conexion");

$consulta = mysqli_query($conexion, "SELECT * from juegos") or die ("Error al consultar
registros");

echo "<center><table border='5'>";
echo "<tr>";
echo "<th id='id_articulo'> id_articulos </th>";
echo "<th id='Nombre'> Nombre </th>";
echo "<th id='Genero'> Genero </th>";
echo "<th id='Descripcion'> Descripcion </th>";
echo "<th id='id_usuario'> id_usuario </th>";
echo "</tr>";

while ($extraido = mysqli_fetch_array($consulta))
{
echo "<tr>";
echo "<td>".$extraido["id_articulo"]."</td>";
echo "<td>".$extraido["Nombre"]."</td>";
echo "<td>".$extraido["Genero"]."</td>";
echo "<td>".$extraido["Descripcion"]."</td>";
echo "<td>".$extraido["id_usuario"]."</td>";
echo "</tr>";

}

mysqli_close($conexion);
echo "</table>";
?>
<br><br>
<a href="sesion.php" target="_self">Regresar</a>
	<br>
	<br>
	<a href="registrodeproducto.html" target="_self">Añadir mas productos</a>
</font>

</section>
		
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
</body>
</html>
