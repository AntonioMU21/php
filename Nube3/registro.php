<?php
session_start();

// Esta línea es necesaria para evitar el error fatal (MySQLi Exception)
// si intentas registrar un usuario duplicado. Así, tu 'else' funcionará.
mysqli_report(MYSQLI_REPORT_OFF); 

$u = $_POST['usuario'];
$n = $_POST['nombre'];
$c = $_POST['clave'];
$codificada = md5($c);

$host = "localhost"; 
$usuario_db = "root"; 
$contrasena_db = ""; 
$base_datos = "Nube3"; 

// Crear la conexión
$conexion = mysqli_connect($host, $usuario_db, $contrasena_db, $base_datos);

// Verificar la conexión
if (!$conexion) {
    // Usar la función procedural correcta para el error de conexión
    die("Error de conexión: " . mysqli_connect_error());
}

// El campo de la base de datos es 'clave', como lo renombraste.
$sql = "INSERT INTO usuarios (nombre, usuario, clave) VALUES ('$n', '$u', '$codificada')";

$resultado = $conexion->query($sql);
$l = mysqli_affected_rows($conexion);

if ($l == 1) {
    // --- LÓGICA DE CREACIÓN DE CARPETA ---
    $carpeta_base = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/";
    $nombre_carpeta_usuario = $carpeta_base . $u; 

    // Sintaxis simple y correcta de mkdir()
    if (mkdir($nombre_carpeta_usuario, 0777, true)) { 
        header("Location: login.html");
        exit;
    } else {
        echo "<center><h1>Error al crear la carpeta del usuario.</h1></center>";
    }
    // --- FIN LÓGICA DE CARPETA ---
} else {
    // Este mensaje se mostrará si la inserción falló (ej. el usuario $u ya existe)
    echo "<center><h1>No se ha podido registrar al usuario.</h1></center>";
}

mysqli_close($conexion);
?>