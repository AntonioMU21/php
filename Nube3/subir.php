<?php
session_start();

// 1. Verificar Sesión y obtener usuario
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

$u = $_SESSION['usuario']; 

// 2. Definir Rutas
// ATENCIÓN: Esta ruta debe coincidir exactamente con la que usaste en registro.php
$carpeta_base = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/";

// Obtener el nombre original del archivo subido
$nombre_archivo = basename($_FILES["archivo"]["name"]);

// 3. Crear la ruta final de destino (incluyendo la carpeta del usuario)
$ruta_final_destino = $carpeta_base . $u . "/" . $nombre_archivo; 

// Obtener la ruta temporal del servidor donde PHP guardó el archivo
$ruta_temporal = $_FILES["archivo"]["tmp_name"];

// 4. Mover el archivo subido
// move_uploaded_file mueve el archivo desde la ruta temporal a la ruta final.
if (move_uploaded_file($ruta_temporal, $ruta_final_destino)) {
    // Si la subida fue exitosa
    header("Location: listado.php"); // Redirigir de vuelta a la lista
    exit;
} else {
    // Si la subida falló
    echo "<center><h1>Error al subir el archivo o el archivo es demasiado grande.</h1></center>";
}
?>