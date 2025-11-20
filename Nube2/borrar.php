<?php
$f=$_GET['f'];
$path = "C:/Users/Alumno/Desktop/".$f;
unlink($path);
header("Location: index.php");
?>