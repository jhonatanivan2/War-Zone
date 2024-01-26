<?php
session_start();
$correo =$_POST['correo'];
$contrasena =$_POST['contrasena'];

include("conexion.php");

$proceso = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'AND
contrasena='$contrasena'");

if($resultado = mysqli_fetch_array($proceso)){
 $_SESSION['c_correo'] = $correo;
 header("location: sesion.php");
}
else{
 header("Location: indexwarzone.php");
}
?>
