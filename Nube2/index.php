<html>
  <head>
    <style>
/* === ESTILO GLOBAL === */
@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap');

body {
    font-family: 'Orbitron', sans-serif;
    background: radial-gradient(circle at top left, #0f2027, #203a43, #2c5364);
    margin: 0;
    padding: 50px;
    color: #fff;
    overflow-x: hidden;
}

/* === BANNER === */
#banner {
    background: linear-gradient(135deg, #00ffff, #1a75ff);
    color: #000;
    padding: 30px 0;
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    letter-spacing: 2px;
    border-radius: 25px;
    box-shadow: 0 0 30px #00ffff, 0 0 60px #1a75ff;
    animation: bannerGlow 2s ease-in-out infinite alternate;
}

/* Animación glow del banner */
@keyframes bannerGlow {
    0% { box-shadow: 0 0 20px #00ffff, 0 0 40px #1a75ff; }
    100% { box-shadow: 0 0 50px #00ffff, 0 0 100px #1a75ff; }
}

/* === CONTENEDOR DE LA TABLA === */
.table-wrapper {
    margin-top: 40px;
    padding: 30px;
    background: rgba(10, 10, 30, 0.75);
    border-radius: 25px;
    backdrop-filter: blur(15px);
    box-shadow: 0 0 30px rgba(0,255,255,0.25);
    border: 1px solid rgba(0,255,255,0.3);
    animation: fadeIn 1.5s ease-out;
}

/* Fade in del contenedor */
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(30px);}
    to {opacity: 1; transform: translateY(0);}
}

/* === TABLA === */
table {
    width: 100%;
    border-collapse: collapse;
}

table tr {
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

/* Hover futurista */
table tr:hover {
    background: rgba(0, 255, 255, 0.1);
    transform: translateX(8px);
    box-shadow: 0 0 20px #00ffff, 0 0 40px #1a75ff;
}

/* Celda con flex para separar nombre e icono */
table td {
    padding: 18px 16px;
    font-size: 18px;
    color: #fff;
    border-bottom: 1px solid rgba(0,255,255,0.2);

    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Nombre del archivo */
.filename {
    font-weight: 600;
    color: #00ffff;
    text-shadow: 0 0 5px #00ffff;
    transition: color 0.3s ease;
}

.filename:hover {
    color: #ff00ff;
    text-shadow: 0 0 10px #ff00ff, 0 0 20px #00ffff;
}

/* Icono borrar */
.delete-icon {
    width: 26px;
    cursor: pointer;
    opacity: 0.8;
    filter: drop-shadow(0 0 6px #ff0000);
    transition: transform 0.3s ease, filter 0.3s ease, opacity 0.25s ease;
}

/* Hover del icono */
.delete-icon:hover {
    transform: scale(1.5) rotate(-15deg);
    filter: drop-shadow(0 0 12px #ff0000) drop-shadow(0 0 6px #ff6666);
    opacity: 1;
}

/* === SUBIR ARCHIVO === */
.upload-wrapper {
    display: flex;               /* Coloca texto e imagen en línea */
    align-items: center;         /* Centra verticalmente */
    justify-content: flex-start; /* Alinea a la izquierda */
    gap: 15px;                   /* Espacio entre texto e imagen */
    margin: 20px 0;              /* Margen vertical */
}

.upload-wrapper h2 {
    margin: 0;                   /* Quita margen por defecto */
    font-size: 22px;
    color: #00ffff;
}

.upload-wrapper img {
    cursor: pointer;
    transition: transform 0.3s ease;
}

.upload-wrapper img:hover {
    transform: scale(1.1);
}

/* === RESPONSIVE === */
@media (max-width: 768px) {
    body {
        padding: 20px;
    }
    #banner {
        font-size: 28px;
        padding: 20px 0;
    }
    table td {
        font-size: 16px;
        padding: 12px 10px;
    }
    .delete-icon {
        width: 22px;
    }
    .upload-wrapper h2 {
        font-size: 18px;
    }
    .upload-wrapper img {
        width: 40px;
    }
}


</style>
  </head>
<body>
 <table id=banner width=100% cellspacing=0 cellpadding=0 border=0>

  <tr>

    <th>Subida de archivos</th>

  </tr>
  </table>   
  <div class="upload-wrapper">
<h2>Subir archivo</h2><a  href="subir.html"><img src="subir.png" width="50"></a></div>
   <?php
$path = "C:\Users\Alumno\Desktop";
//Abrimos el directorio
$dir = opendir($path);
if (!$dir) {echo "Error al abrir el directorio";};
//Recorremos el directorio completo y mostramos sus elementos
echo "<table>";
while ($elemento = readdir($dir))
{
  if($elemento != "." && $elemento != "..")
echo "<tr><td>".$elemento."<a href='borrar.php?f=$elemento'><img src='borrar2.png' width='20'></a>"."</td></tr>";
};
?>     
</table>
</body>



</html>