<?php
$directorio = "C:/Users/Alumno/Desktop/";
$nombre=$_FILES['archivo']['name'];
$destino=$directorio.$nombre;

if (move_uploaded_file($_FILES['archivo']['tmp_name'],$destino)) {
    echo "Archivo subido con éxito a ".$destino;
    echo '<br><a href="index.php">Volver al inicio</a>';
} else {
    echo "Error al subir el archivo";
}

?>