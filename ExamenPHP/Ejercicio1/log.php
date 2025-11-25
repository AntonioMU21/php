<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "ejercicio1";
$dni=$_POST['dni'];
$c=$_POST['clave'];
$codificada=md5($c);
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$sql = "SELECT * FROM usuarios WHERE dni='$dni'";
$resultado = $conexion->query($sql);
$l = mysqli_num_rows($resultado);

if ($l == 1) {
    $fila = $resultado->fetch_array();

    if ($fila[2] == $codificada) {
        header("Location: logCorrecto.php");
    }
    else echo "<center><h1>La clave es incorrecta</h1></center>";
}
else echo "<center><h1>El usuario no existe</h1></center>";

?>