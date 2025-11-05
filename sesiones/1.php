<?php
session_start();

?>
<html>

<head>
    <style>
        a {
            display: inline-block;
            font-size: 50px;
            color: darkblue;
        }

        a:hover {
            color: red;
            font-size: 100px;
            transition: font-size 0.5s;
            rotate: calc();
            transform-origin: center;
            color: darkgreen;
        }
    </style>
</head>

<body>
    <?php
    //echo session_id()."<br>";
    //echo session_name()."<br>";
    //$_SESSION["nombre"] = "Antonio";
    if (isset($_SESSION["contador"]))
    {
        echo $_SESSION["contador"];
          $_SESSION["contador"]++;
        }
        else{
    $_SESSION["contador"] = 0;
    }
  
    ?>
    <center>
        <div>
            <a href="1.php">RECARGAR</a>
        </div>
        <div>
            <a href="salir.php">SALIR</a>
        </div>
        <div>
            <a href="entrada.php">ENTRAR</a>
        </div>
    </center>
</body>

</html>