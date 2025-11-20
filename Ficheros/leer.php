<?php
$path="C:/xampp/htdocs/Ficheros/Comentarios.txt";
$fp = fopen($path,"r");
$texto="";
while($linea= fgets($fp,1024)){
    $texto = $texto+$linea;
    echo "<texarea cols='40' rows='10'>".$texto."</textarea>";
}
fclose($fp);
?>