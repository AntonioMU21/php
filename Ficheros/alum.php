<html>
<body>
    <form>
        <select>
   <?php
$path="C:/xampp/htdocs/Ficheros/alumnos.txt";
$fp = fopen($path,"r");
while($linea= fgets($fp,1024)) echo "<option>".$linea."</option>";
fclose($fp);
?>        
    </select>
    </form>
</body>


</html>
