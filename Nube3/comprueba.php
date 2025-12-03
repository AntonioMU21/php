<?php
session_start();
$host = "localhost";
$usuario_db = "root";
$contrasena_db = "";
$base_datos = "Nube3";
$u = $_POST['usuario'];
$c = $_POST['clave']; 
$codificada = md5($c); 

// Conexión
$conexion = mysqli_connect($host, $usuario_db, $contrasena_db, $base_datos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// CORRECCIÓN: Usar la tabla 'usuarios' (en plural)
$sql = "SELECT * FROM usuarios WHERE usuario = '$u'";
$resultado = $conexion->query($sql);

// Verificar si se encontró el usuario (1 fila afectada)
if (mysqli_num_rows($resultado) == 1) { 
    $fila = $resultado->fetch_array();

    // CORRECCIÓN CLAVE: Usar el nombre de la columna 'clave' (según tu BD)
    if ($fila['clave'] == $codificada) { 
        
        // Iniciar Sesión 
        $_SESSION['usuario'] = $u; 
        header("Location: listado.php");
        exit;
    } else {
        echo "<center><h1>La clave es incorrecta</h1></center>";
    }
} else {
    // Si la consulta no encontró filas
    echo "<center><h1>El usuario no existe</h1></center>";
}

mysqli_close($conexion);
?>