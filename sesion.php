<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>war zone</title>
<link rel="icon" href="War-zone.png">
	<link rel="stylesheet" href="sesion.css">
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
						<li><a href="quienessomos.html">Quienes somos?</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		
		<section>
<center><img src="Usuario.png" width="150" height="150"></center>
<center>

<?php
 session_start();

 if(isset($_SESSION['c_correo'])){

echo"<font face='Arial'>";
echo"<center><h2>  </center></h2>";
echo"<center><h1> Binvenido </center></h1></font>";
     
   echo"<br>";
   echo"<a href='cerrar_sesion.php'><img src='Candado.png' weidht=100 height=100></a>";
   echo"<br>";
   echo"<font face='arial'>";
   echo"Cerrar sesion";
   echo"</font>";
  
}
else{
   header("location:indexinicio.html"); //te regresa al index para colocar los datos correctamente
}
?>

<div><a href="consulta.php"><img class ="lupa" src="Lupa.png" ></a></div>
<div><a href="actualizar.html"><img class ="actualizar" src="Cargando.png"></a></div>
<div><a href="Eliminar registro.html"><img class ="bote" src="Basura.png" ></a></div>
	<div id="letra1"><br>Mis juegos</div>
	<div id="letra2"><br>Actualizar datos</div>
	<div id="letra3"><br>Eliminar cuenta<br></div>


</section>
		
		<footer>
			<div><p id="info">
				Ote. 4 23, Cuchilla del Tesoro, Gustavo A. Madero, 07900 Ciudad de México, CDMX</p></div>
			</footer>
		
		<aside>
				<a href="https://www.facebook.com/"  target="_blank"><div><img class="redes" src="face.png"></div></a>
				
				<a href="https://www.instagram.com/kali_tree/"  target="_blank"><div><img id="redess" src="insta.png"></div></a>
				
				<a href="https://www.google.com/intl/es-419/gmail/about/"  target="_blank"><div><img class="redes" src="correo.png"></div></a>
				
				<a href="https://www.whatsapp.com/?lang=es"  target="_blank"><div><img class="redes" src="wasa.png"></div></a>
				
				<a href="https://cabanaskalitree.com/?fbclid=IwAR0F9Y5X2nxEsUQDf_kkVP8Z8Sum9FhraGT7krA60ZKaveKX1JPcoJlmb_Y"  target="_blank"><div><img class="redes" src="icone.png"></div></a>
				
			</aside>
		
		</div>


</body>
</html>