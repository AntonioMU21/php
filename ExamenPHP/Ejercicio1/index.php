<?php
$n=$_POST['nombre'];
$dni=$_POST['dni'];
$c=$_POST['clave'];
$codificada=md5($c);


$host = "localhost";
$usuario = "root";       
$contrasena = "";       
$base_datos = "ejercicio1";


$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);


if (!$conexion) {
    die("Error de conexión: " . $conexion->connect_error);
}


$sql = "insert into usuarios values('$n','$dni','$codificada')";
$resultado = $conexion->query($sql);
$l=mysqli_affected_rows($conexion);
if ($l==1) header("Location: index.html");
else echo "<center><h1>No se ha podido insertar el registro</h1></center>";
?>