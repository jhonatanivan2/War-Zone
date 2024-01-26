<html>
<head>
<title> Crear tabla para base de datos </title>
</head>
<body bgcolor="yellow ">
<center><h1>Bustillos Medina Jesus Ivan</h1>
<h2> 1441 <br><br> </h2>
<?php

$servidor= $_POST["serv"];
$usuario= $_POST["user"];
$password= $_POST["pass"];
$bdname= $_POST["nom"];
$tabla= $_POST["table"];

// se crea la conexion con la base de datos
$con = mysqli_connect($servidor, $usuario, $password, $bdname);

//se verifica la conexion 
 if (!$con) {
   die("No se puede conectar: ".mysqli_connect_error());
}
$sql = "CREATE TABLE $tabla (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
Nombre VARCHAR (30) NOT NULL,
Apellido_paterno VARCHAR (30) NOT NULL,
Telefono VARCHAR (30) NOT NULL,
Correo VARCHAR (50) NOT NULL,
Contrasena VARCHAR (50) NOT NULL,
Confirmar_contrasena VARCHAR (50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ) ";

if (mysqli_query($con, $sql)) {
echo "Se creo la tabla ";
} else {
  echo "Error en la creacion de la tabla: " . mysqli_error($con);
}
mysqli_close($con);
?>
</body>
</html>