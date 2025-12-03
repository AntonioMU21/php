<?php
session_start();

//Verificar Sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}
$nombre_usuario = $_SESSION['usuario']; 
echo "<center><h1>Bienvenido, $nombre_usuario</h1></center>";
?>
<html>
<head>
  <style>/* ======= FONDO GALÁCTICO CYBERPUNK ======= */
body {
    margin: 0;
    padding: 50px 0;
    font-family: 'Segoe UI', sans-serif;
    background: radial-gradient(circle at center, #002b55, #000814, #000000);
    background-size: 200% 200%;
    animation: spaceWarp 15s ease-in-out infinite;
    color: #c8eeff;
    text-align: center;
}

@keyframes spaceWarp {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 100%; }
    100% { background-position: 0% 50%; }
}

/* ======= TITULO HOLOGRÁFICO ======= */
h1 {
    font-size: 45px;
    color: #7fd8ff;
    text-shadow:
        0 0 15px #3ecbff,
        0 0 30px #1aaaff,
        0 0 45px #008cff;
    letter-spacing: 3px;
    margin-bottom: 40px;
}

/* ======= PANEL CYBER HUD ======= */
.main-panel {
    width: 70%;
    margin: auto;
    padding: 40px;
    background: rgba(0, 40, 70, 0.25);
    border: 1px solid rgba(0, 150, 255, 0.5);
    box-shadow: 
        0 0 20px rgba(0,150,255,0.5),
        inset 0 0 25px rgba(0,150,255,0.2);
    border-radius: 18px;
    backdrop-filter: blur(15px);
    animation: panelGlow 4s infinite alternate ease-in-out;
}

@keyframes panelGlow {
    from {
        box-shadow: 
            0 0 20px rgba(0,150,255,0.3),
            inset 0 0 25px rgba(0,150,255,0.15);
    }
    to {
        box-shadow: 
            0 0 30px rgba(0,180,255,0.8),
            inset 0 0 40px rgba(0,180,255,0.25);
    }
}

/* ======= TABLA ALIEN-WINDOW ======= */
table {
    margin: 30px auto;
    width: 90%;
    border-collapse: collapse;
    background: rgba(0, 60, 100, 0.15);
    border: 1px solid rgba(0,200,255,0.2);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 0 15px rgba(0,200,255,0.3);
}

table tr td {
    padding: 12px 14px;
    border-bottom: 1px solid rgba(0,200,255,0.1);
    font-size: 18px;
}

table tr:hover {
    background: rgba(0,150,255,0.2);
}

/* Icono borrar */
table img {
    float: right;
    transition: 0.2s;
}
table img:hover {
    transform: scale(1.3);
    filter: drop-shadow(0 0 8px #00eaff);
}

/* ======= SEPARADOR ======= */
hr {
    border: none;
    height: 2px;
    width: 80%;
    margin: 40px auto;
    background: linear-gradient(90deg, transparent, #00caff, transparent);
}

/* ======= TÍTULO SUBIDA HOLOGRAMA ======= */
h3 {
    font-size: 30px;
    color: #9fe8ff;
    text-shadow: 0 0 15px #4dccff;
    margin-bottom: 25px;
}

/* ======= INPUT FILE FUTURISTA ======= */
input[type="file"] {
    padding: 12px;
    background: rgba(255,255,255,0.75);
    border-radius: 10px;
    border: none;
    cursor: pointer;
    font-size: 15px;
}

/* ======= BOTÓN NEÓN GALÁCTICO ======= */
input[type="submit"] {
    padding: 12px 30px;
    margin-left: 20px;
    background: linear-gradient(90deg, #0078ff, #4bdfff);
    border: none;
    border-radius: 12px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    color: #001a2e;
    box-shadow: 0 0 15px #41d9ff;
    transition: 0.3s;
}

input[type="submit"]:hover {
    transform: scale(1.06);
    box-shadow: 0 0 25px #80f4ff;
}

/* ======= CERRAR SESIÓN ======= */
a {
    margin-top: 25px;
    display: inline-block;
    font-size: 20px;
    color: #9fe8ff;
    text-decoration: none;
    transition: 0.3s;
}

a:hover {
    text-shadow: 0 0 18px #00eaff;
}
</style>
</head>
<body>
  <div class="main-panel">
 <table id=banner width=100% cellspacing=0 cellpadding=0 border=0>
</table>   

   <?php
   $nombre_usuario = $_SESSION['usuario']; 
$path = "C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/$nombre_usuario";
//Abrimos el directorio

$dir = opendir($path);
if (!$dir) {echo "Error al abrir el directorio";};
//Recorremos el directorio completo y mostramos sus elementos
echo "<table>";
while ($elemento = readdir($dir))
{
  if($elemento != "." && $elemento != "..")
echo "<tr><td>".$elemento."<a href='borrar.php?f=$elemento'><img src='borrar2.png' width='40'></a>"."</td></tr>";
};
?>     
</table>
<hr>
<h3>Subir Nuevo Archivo</h3>
<form action="subir.php" method="POST" enctype="multipart/form-data">
    <label for="archivo">Selecciona un archivo:</label>
    <input type="file" name="archivo" id="archivo" required>
    <input type="submit" value="Subir Archivo">
</form>
<a href="salir.php">Cerrar Sesión</a>
</div>
</body>



</html>