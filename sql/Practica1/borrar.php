<html>
    <head></head>
    <?php
$host="localhost";
$usuario="root";
$clave= "";
$db="tienda";
$conexion=mysqli_connect($host,$usuario,$clave,$db);
$c=$_GET['codigo'];
if (!$conexion) {die("Error");}

$sql= "delete from clientes where ID=$c";
$red=$conexion->query($sql);
$l=mysqli_affected_rows($conexion);
while($fila=$red->fetch_array()) 
    {
        if ($l==1) header("Location: index.php");
        else echo "<center><h1>No se ha podido borrar el registro</h1></center>";
    }
?>
</table>
</center>


</body>



</html>