<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "tienda";
$u=$_POST['usuario'];
$c=$_POST['clave'];
$codificada=md5($c);
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$sql = "SELECT * FROM usuario WHERE usuario='$u'";
$resultado = $conexion->query($sql);
$l = mysqli_num_rows($resultado);

if ($l == 1) {
    $fila = $resultado->fetch_array();

    if ($fila[2] == $codificada) {
        header("Location: listado.php");
    }
    else echo "<center><h1>No existe usuario o la clave es incorrecta</h1></center>";
}

?>