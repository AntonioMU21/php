<?php
$path="C:/xampp/htdocs/Ficheros/alumnos.txt";
$fp = fopen($path,"r");
$num= fpassthru($fp);
fclose($fp);
echo "<br> El numero de caracteres leidos es $num";
?>