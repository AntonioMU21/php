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
/* --- Formulario --- */
form {
    background-color: #ffffff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    border-radius: 10px;
    padding: 20px 30px;
    display: inline-block;
    margin-bottom: 30px;
    text-align: center;
}

form label {
    font-weight: 600;
    color: #34495e;
    margin-right: 8px;
}

form input[type="text"],
form input[type="number"] {
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin: 0 10px 10px 0;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
}

form input[type="text"]:focus,
form input[type="number"]:focus {
    border-color: #16a085;
    box-shadow: 0 0 5px rgba(22, 160, 133, 0.3);
}

form input[type="submit"] {
    background-color: #16a085;
    color: white;
    border: none;
    padding: 9px 18px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.2s, transform 0.2s;
}

form input[type="submit"]:hover {
    background-color: #149174;
    transform: translateY(-2px);
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
        <h1>LISTADO DE DATOS</h1>
 <form method="get" action="insertar.php">
<label for="codigo">Escriba el codigo</label>
<input type="text" id="codigo" name="codigo">
<label for="nombre">Escriba el nombre</label>
<input type="text" id="nombre" name="nombre">
<label for="precio">Escriba el precio</label>
<input type="text" id="precio" name="precio">
<input type="submit" value="Insertar">
</form>  

        <table>
            <tr><th>Codigo</th><th>Producto</th><th>Precio</th></tr>
<?php
$host="localhost";
$usuario="root";
$clave= "";
$db="almacen";
$conexion=mysqli_connect($host,$usuario,$clave,$db);

if (!$conexion) {die("Error");}

$sql= "select * from productos";
$red=$conexion->query($sql);

while($fila=$red->fetch_array()) 
    {
        echo "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2].
        "</td></tr>";
    }
?>
</table>
</center>


</body>



</html>