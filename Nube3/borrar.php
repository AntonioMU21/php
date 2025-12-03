<?php
session_start();

// 1. Verificar sesión y obtener el nombre de usuario ($u)
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}
$u = $_SESSION['usuario']; 

// 2. Obtener el nombre del archivo de la URL
// La variable $f contiene el nombre del archivo a borrar (ej: 'prueba.txt')
$f = $_GET['f'];

// 3. Definir la RUTA BASE (Debe coincidir con la de registro.php)
$carpeta_base = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/";

// 4. Construir la RUTA COMPLETA Y CORRECTA
// Se concatena la carpeta base + el usuario ($u) + el archivo ($f)
$Path = $carpeta_base . $u . "/" . $f;

// 5. BORRAR EL ARCHIVO
// Usamos unlink() en su sintaxis simple
if (unlink($Path)) {
    // Si se borra con éxito, redirige a la lista
    header("Location: listado.php");
    exit;
} else {
    // Si hay un error (ej. permisos, archivo no encontrado)
    echo "<center><h1>Error al intentar borrar el archivo.</h1></center>";
    // O puedes redirigir con un mensaje de error:
    // header("Location: listado.php?error=borrado_fallido"); exit;
}
?>