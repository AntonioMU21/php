<html>
    <head></head>
    <body>
<?php
$host="localhost";
$usuario="root";
$clave= "";
$db="concesionario";
$conexion=mysqli_connect($host,$usuario,$clave,$db);

if (!$conexion) {die("Error");}

$m=$_GET['matricula'];

$sql= "delete from coches where matricula='$m'";
$conexion->query($sql);

$l=mysqli_affected_rows($conexion);

if ($l==1) {
    header("Location: index.php");
    exit();
} else {
    echo "<center><h1>No se ha podido borrar el registro</h1></center>";
}

mysqli_close($conexion);
?>
    </body>
</html>