<?php
$path="C:/xampp/htdocs/Ficheros/Comentarios.txt";
$texto=$_POST['texto'];
$fp = fopen($path,"a");
fwrite($fp, $texto);
fclose($fp);
?>