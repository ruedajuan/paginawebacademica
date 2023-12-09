<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();    
    if(!isset($_SESSION["usuario"])){
        header("location: http://pruebamdsi.lovestoblog.com/centroedu_inicio.php"); //vuelve al login
    }
    echo "BIENVENIDO";
    

    ?>
    <br>
    <a href="http://pruebamdsi.lovestoblog.com/centroedu_cerrarsesion.php"> Cerrar sesion <a> <br>
</body>
</html>