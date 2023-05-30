<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ejemplo1</title>
</head>
<body>

    <form action="conexion.php" method="post">
        <input type="text" name="nom" placeholder="Nombre">
        <input type="text" name="ape" placeholder="Apellido">
        <button type="submit" name="enviar">Enviar</button>

    </form>

    <form action="eliminar.php" method="post">
        <input type="text" name="nombre1" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <button type="submit" name="borrar">Borrar</button>

    </form>



    
</body>
</html>