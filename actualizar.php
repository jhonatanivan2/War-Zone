<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>actualizar</title>
	<link rel="icon" href="War-zone.png">
	<link rel="stylesheet" href="actualizar.css">
</head>

<body>
	
	<div id="contenedor">
	
	<header>
		<div><a href="index.html"><img id="logo" src="War-zone.png"></a></div>
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
						<li><a href="indexwarzone.php">Inicio de sesión</a></li>
						<li><a href="quienessomos.html">¿Quienes somos?</a></li>
					</ul>
				</li>
					
			</ul>
		</nav>
		
		<section>

<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "warzone";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die("Error con la
conexion");

$id_usuario = $_POST["id"];
$Nombre = $_POST["nomb"];
$Apellido_paterno = $_POST["ape"];
$Telefono = $_POST["tel"];
$Correo = $_POST["cor"];
$Contraseña = $_POST["contra"];
$Confirmar_contraseña = $_POST["conf"];

mysqli_query($conexion, "UPDATE usuario SET id_usuario='$id_usuario',Nombre='$Nombre',Apellido_paterno='$Apellido_paterno', Telefono='$Telefono',Correo='$Correo',Contrasena='$Contraseña', Confirmar_contrasena='$Confirmar_contraseña'where id_usuario='$id_usuario'")or die ("Error al actualizar registro");

mysqli_close($conexion);
echo "Los datos se han actualizado correctamente";
?>
<a href="sesion.php" target="_self">Regresar</a>

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