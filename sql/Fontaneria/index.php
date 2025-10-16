<html>
    <head>
            <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 40px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e3f2fd;
            transition: background-color 0.2s;
        }
        
    </style>
    <script>
        function comprar(){
            alert ("No queda stock, disculpe las molestias")
        }
        function borrar() {
            alert("Producto borrado de su carrito")
        }
        
        </script>
    </head>

<body>
    <center>
        <h1>LISTADO DE DATOS</h1>
        <table>
            <tr><th>Producto</th><th>Precio</th><th>Existencia</th><th>Stock Minimo</th><th>Comprar</th>
        <th>Eliminar</th></tr>
<?php
$host="localhost";
$usuario="root";
$clave= "";
$db="fontaneria";
$conexion=mysqli_connect($host,$usuario,$clave,$db);

if (!$conexion) {die("Error");}

$sql= "select * from productos";
$red=$conexion->query($sql);
while($fila=$red->fetch_array()) 
    {
        echo "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3].
        "</td><td><img src='carrito.png' onClick='comprar()' width='25px'</td>
        <td><img src='papelera.png' onClick='borrar()' width='25px'></td></tr>";
    }
?>
</table>
</center>


</body>



</html>