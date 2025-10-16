<html>

<head>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>
    <table>
        <?php
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        if ($n1 == $n2) {
    $cadena = "<tr><td>Numero 1 ($n1) es igual que Numero 2 ($n2)</td></tr>";
        } else {
            if ($n1 > $n2) {
    $cadena = "<tr><td>Numero 1 ($n1) es mayor que Numero 2 ($n2)</td></tr>";
            } else {
    $cadena = "<tr><td>Numero 1 ($n1) es mayor que Numero 2 ($n2)</td></tr>";
            }
        }
        echo $cadena;
        ?></table>
</body>

</html>