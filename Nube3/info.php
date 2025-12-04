<?php
session_start();
//Verificar Sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}
?>
<head>
    <style>
        /* ====== FONDO NASA GALAXY + CHAOS MAGIC ====== */
body {
    margin: 0;
    padding: 40px 0;
    background: radial-gradient(circle at center, #001d3d, #000814 60%, #000000);
    color: #d7f5ff;
    font-family: 'Segoe UI', sans-serif;
    text-align: center;
    background-size: 300% 300%;
    animation: witcherNebula 12s ease-in-out infinite;
}

@keyframes witcherNebula {
    0%   { background-position: 0% 50%; }
    50%  { background-position: 100% 80%; }
    100% { background-position: 0% 50%; }
}


/* ====== TABLA SUPREMA DE DATOS (nivel: Ministerio del Tiempo) ====== */
table {
    margin: 50px auto;
    width: 60%;
    border-collapse: collapse;
    background: rgba(0, 60, 120, 0.18);
    border: 1px solid rgba(0, 200, 255, 0.4);
    border-radius: 18px;
    backdrop-filter: blur(10px);
    box-shadow: 
        0 0 30px rgba(0, 200, 255, 0.5),
        inset 0 0 20px rgba(0, 150, 255, 0.15);
    animation: hologramPulse 3s infinite alternate ease-in-out;
}

@keyframes hologramPulse {
    from {
        box-shadow: 
            0 0 20px rgba(0,200,255,0.3),
            inset 0 0 20px rgba(0,150,255,0.12);
    }
    to {
        box-shadow: 
            0 0 40px rgba(0,255,255,0.8),
            inset 0 0 40px rgba(0,180,255,0.25);
    }
}

/* ====== CELDAS SUPER ESTILAZO ====== */
td {
    padding: 18px 20px;
    font-size: 20px;
    border-bottom: 1px solid rgba(0,150,255,0.18);
    text-shadow: 0 0 8px rgba(180,240,255,0.5);
}

tr:last-child td {
    border: none;
}

/* ====== TÍTULO DE ERROR (modo: Amador “QUE NO ME TOQUEN LOS COJ****”) ====== */
h1 {
    font-size: 40px;
    color: #ff6b6b;
    margin-top: 50px;

    text-shadow:
        0 0 15px #ff3b3b,
        0 0 30px #ff1a1a,
        0 0 45px #ff0000;
    animation: errorFlash 1.4s infinite alternate ease-in-out;
}

@keyframes errorFlash {
    from { opacity: 0.7; }
    to   { opacity: 1;   }
}

/* ====== LINK DE SALIDA O NAVEGACIÓN (modo Zootrópolis policía cyber) ====== */
a {
    color: #8feaff;
    font-size: 22px;
    text-decoration: none;
    margin-top: 20px;
    display: inline-block;
    transition: 0.3s;
}

a:hover {
    text-shadow: 0 0 10px #00eaff;
    transform: scale(1.08);
}
</style>
</head>
<body>
    <?php
$directorio_base = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/";
$u = $_SESSION['usuario']; 
$f = $_GET['f'];
$directorio_completo = $directorio_base . $u."/" . $f;
if (!file_exists($directorio_completo) || is_dir($directorio_completo)) {
    echo "<h1>Error: Archivo no encontrado.</h1>";
    exit;
}
$tamano = filesize($directorio_completo);
$tipo=filetype($directorio_completo);
echo "<table>";
echo "<tr><td>Nombre del archivo: </td><td>".$f."</td></tr>";
echo "<tr><td>Ruta completa: </td><td>".$directorio_completo."</td></tr>";
echo "<tr><td>Tipo de archivo: </td><td>.$tipo.</td></tr>";
echo "<tr><td>El tamaño del archivo es: </td><td>".$tamano." bytes</td></tr>";
echo "<tr><td><a href='listado.php'>Volver al listado</a></td></tr>";
echo "</table>";

?>
</body>