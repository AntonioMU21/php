<?php
$host="localhost";
$usuario="root";
$clave= "";
$db="almacen";
$conexion=mysqli_connect($host,$usuario,$clave,$db);

if (!$conexion) {die("Error");}
$pro=$_GET['pro'];
$sql= "select * from productos where producto like '$pro'";
$resultado=$conexion->query($sql);
$l=mysqli_affected_rows($conexion);
echo $l;
?>
