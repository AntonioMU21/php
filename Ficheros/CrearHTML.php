<?php
$path="C:/xampp/htdocs/Ficheros/Fichero.txt";
$fp = fopen($path,"r");
while($linea= fgets($fp,1024)) echo $linea;
fclose($fp);
?>