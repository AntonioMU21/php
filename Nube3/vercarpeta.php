<?php
session_start();

// Verificar Sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

$nombre_usuario = $_SESSION['usuario']; 
$directorio_base = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/";

// 1. Obtener la subcarpeta a la que queremos entrar
$d = $_GET['d'];

// 2. Construir la ruta completa de la carpeta que vamos a abrir
$directorio_completo = $directorio_base . $nombre_usuario . "/" . $d;

// Verificar que la carpeta existe y es un directorio
if (!is_dir($directorio_completo)) {
    echo "<center><h1>Error: Carpeta no encontrada o no es un directorio válido.</h1></center>";
    exit;
}

?>
<html>
<head>
    <style>
        /* ──────────────────────────────── */
/*   ESTILO MÁGICO – DARK FANTASY   */
/*          DOOM x HOGWARTS         */
/* ──────────────────────────────── */

body {
    background: radial-gradient(circle at top, #1a1a1a, #000);
    color: #e0d9c7;
    font-family: "Cinzel", serif;
    text-shadow: 1px 1px 3px #000;
    margin: 0;
    padding: 20px;
}

/* Contenedor general */
table {
    width: 80%;
    margin: auto;
    border-collapse: collapse;
    background: rgba(20, 20, 20, 0.65);
    box-shadow: 0 0 25px rgba(255, 200, 0, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(5px);
    border-radius: 12px;
}

td {
    padding: 12px;
    font-size: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

/* Iconos */
td img {
    margin-left: 10px;
    vertical-align: middle;
    filter: drop-shadow(0 0 6px #ffcc00);
    transition: transform 0.2s;
}

td img:hover {
    transform: scale(1.15);
}

/* ENLACES ÉPICOS */
a {
    color: #ffcc44;
    font-weight: bold;
    text-decoration: none;
    margin-left: 12px;
    font-family: "Cinzel", serif;
    transition: 0.25s;
}

a:hover {
    color: #ffd86d;
    text-shadow: 0 0 8px #ffcc44;
}

/* Títulos */
h1, h2, h3 {
    text-align: center;
    letter-spacing: 2px;
    color: #ffe8b3;
    font-family: "Cinzel", serif;
    text-shadow: 0 0 12px #000, 0 0 6px #ffcc00;
}

/* Contenedor tipo pergamino */
#contenedor-mistico {
    width: 85%;
    margin: auto;
    padding: 25px;
    border-radius: 15px;
    background: linear-gradient(135deg, rgba(90, 60, 30, 0.2), rgba(20, 20, 20, 0.3));
    border: 2px solid rgba(255, 220, 180, 0.2);
    box-shadow: inset 0 0 20px rgba(0,0,0,0.6);
}

/* Scrollbar modo DOOM SLAYER */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-thumb {
    background: #d3a029;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #ffcc44;
}

/* Hover sobre filas */
tr:hover {
    background: rgba(255, 220, 120, 0.1);
    transition: 0.2s;
}

/* Modo "archivo/carpeta brillando" */
tr td:hover {
    text-shadow: 0 0 10px #ffcc00;
}

    </style>
    </head>
<body>
<?php
   
    // 3. Abrir el directorio para leer su contenido
    $dir = opendir($directorio_completo);
    
    echo "<table>"; 

    // 4. Recorrer el directorio
    while ($elemento = readdir($dir))
    {
        // La ruta completa para chequear el tipo de elemento
        $ruta_completa_elemento = $directorio_completo . "/" . $elemento;
        
        if($elemento != "." && $elemento != ".."){
$foto="carpeta.png";
    if (filetype($ruta_completa_elemento)== "file"){
        $foto="archivo.png"; 
    $fila="<tr><td>".$elemento."<img src='$foto' width='40'><a href='info.php?f=$elemento'><img src=info.png width='40'></a><a href='borrar.php?f=$elemento'><img src='borrar2.png' width='40'></a>"."</td></tr>";
    } 
    else {
        $foto="carpeta.png";
        $fila="<tr><td>".$elemento."<img src='$foto' width='40'>"."</td></tr>";
    }

echo $fila;
    }
}
    closedir($dir);
    echo "<tr><td><a href='listado.php'>Volver al listado principal</a></td></tr>";
    echo "</table>"; 
    ?>
    
</body>
</html>