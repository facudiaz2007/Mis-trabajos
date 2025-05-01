<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=obra social et20','root', '');
        echo "conexion ok <br>";

        $conexion->query("DELETE FROM socios WHERE `socios`.`ID` = 15");
        echo "lalalal";

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>
</body>
</html>