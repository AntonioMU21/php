<html>
    <head>
            <style>
/* Body */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #e8ecef;
    color: #2c3e50;
    margin: 0;
    padding: 30px 10px;
}

/* Título */
h1 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 25px;
    color: #34495e;
    letter-spacing: 1px;
}

/* Tabla */
table {
    width: 95%;
    margin: 0 auto;
    border-collapse: separate;
    border-spacing: 0 10px; /* espacio entre filas tipo tarjetas */
}

/* Cabecera */
th {
    background-color: #16a085;
    color: white;
    font-weight: 600;
    padding: 12px 10px;
    border-radius: 8px 8px 0 0;
    text-align: center;
}

/* Filas como tarjetas */
tr {
    background-color: #ffffff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    border-radius: 8px;
    transition: transform 0.2s, box-shadow 0.2s;
}

tr:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* Celdas */
td {
    padding: 10px 8px;
    text-align: center;
}

/* Alternar color de texto en filas impares */
tr:nth-child(odd) td {
    color: #34495e;
}

/* Imagen de contacto */
td img {
    cursor: pointer;
    width: 28px;
    transition: transform 0.3s;
}

td img:hover {
    transform: scale(1.3) rotate(10deg);
}


    </style>
    <script>
        function enviar(fila){
            alert ("Correo enviado correctamente: "+fila)
        }
        
        </script>
    </head>

<body>
    <center>
        <h1>LISTADO DE COCHES</h1>
        <table>
            <tr><th>MARCA</th><th>PRECIO</th><th>COMBUSTIBLE</th><th>POTENCIA</th><th>MATRICULA</th><th>BORRAR</th></tr>
<?php
$host="localhost";
$usuario="root";
$clave= "";
$db="concesionario";
$conexion=mysqli_connect($host,$usuario,$clave,$db);

if (!$conexion) {die("Error");}

$sql= "select * from coches";
$red=$conexion->query($sql);

while($fila=$red->fetch_array()) 
    {
        echo "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2].
        "</td><td>".$fila[3]."</td><td>".$fila[4]."</td>
        
        <td><a href='borrar.php?matricula=$fila[4]'><img src='borrar.png' width='25'></a></td></tr>";
    }
?>
</table>
</center>


</body>



</html>