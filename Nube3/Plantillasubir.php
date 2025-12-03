<?php
session_start();
$nombre_usuario = $_SESSION['usuario'];
$directorio="C:/xampp/htdocs/Ficheros/Nube3/DirectorioRaiz/";
$nombre=$_FILES['archivo']['name'];
$fichero=$directorio."/".$nombre_usuario;
$tamano=$_FILES['archivo']['size'];
$tipo=$_FILES['archivo']['type'];
if ($tamano<5000){ //$type=="image/jpeg" || $tipo=="image/png" || $tipo=="application/pdf" ){
    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$fichero)){
        echo "El archivo se ha subido correctamente";
        header("Location: listado.php");
    } else {
        echo "Error al subir el archivo";
    }
} else {
    echo "El archivo es demasiado grande";
}


?>