<?php
session_start();
echo "Bienvenido: ".$_SESSION["nombre"]."<br>";
?>
<html>
    <body>
        <a href="salir.php"><img src="salir.png" width="50px"></a>
    </body>
</html>