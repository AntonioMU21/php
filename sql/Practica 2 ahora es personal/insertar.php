<?php 
$host="localhost";
$usuario="root";
$clave= "";
$db="almacen";
$conexion=mysqli_connect($host,$usuario,$clave,$db);
if (!$conexion) {die("Error");}
$c=$_GET['codigo'];
$n=$_GET['nombre'];
$p=$_GET['precio'];
$sql= "insert into productos (codigo,producto,precio) values ('$c','$n','$p')";
$conexion->query($sql);

$l=mysqli_affected_rows($conexion);
if ($l==1) {
    header("Location: index.php");
    exit();
} else {
    echo "<center><h1>No se ha podido insertar el registro</h1></center>";
}

mysqli_close($conexion);
?>