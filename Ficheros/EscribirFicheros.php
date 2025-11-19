<?php
$path="C:/xampp/htdocs/Ficheros/Fichero.txt";
$fp = fopen($path,"a");
$cadena="Hola a todos";
fwrite($fp, $cadena);
fclose($fp);
?>