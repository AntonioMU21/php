<?php
session_start();

// 1. Verificar Sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

// 2. Obtener variables necesarias
$nombre_usuario = $_SESSION['usuario']; 
// El nombre de la carpeta nueva viene del input 'nombre_carpeta'
$nombre_carpeta_nueva = $_POST['nombre_carpeta'];

// 3. Definir la ruta BASE y la ruta COMPLETA a crear
// Usar el nombre de usuario ($nombre_usuario) en la ruta
$carpeta_base = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/" . $nombre_usuario . "/";
$ruta_carpeta_a_crear = $carpeta_base . $nombre_carpeta_nueva; 

// 4. LÓGICA DE CREACIÓN DE CARPETA
// Se usa $ruta_carpeta_a_crear, que es la ruta completa
if (mkdir($ruta_carpeta_a_crear, 0777, true)) { 
    header("Location: listado.php");
    exit;
} else {
    // Si la carpeta ya existe o hay un error de permisos
    echo "<center><h1>Error al crear la carpeta. Puede que ya exista.</h1></center>";
}
?>