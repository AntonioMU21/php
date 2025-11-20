<?php
$path = "c:/";
//Abrimos el directorio
$dir = opendir($path);
if (!$dir) {echo "Error al abrir el directorio";};
//Recorremos el directorio completo y mostramos sus elementos
while ($elemento = readdir($dir))
{
echo "$elemento <br>";
};
//Cerramos el directorio