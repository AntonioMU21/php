<?php
$path="C:/windows/System32/drivers/etc/hosts";
$fp = fopen($path,"r");
while($linea= fgets($fp,1024)) echo $linea;
fclose($fp);
?>