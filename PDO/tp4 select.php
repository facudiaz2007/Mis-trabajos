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
        $conexion = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "Punto 1: Conexion ok<br><br>";


        $conexion1 = $conexion->query("SELECT * FROM `stock` ORDER BY ID ASC");



        foreach ($conexion1 as $conexion11){   
        echo "ID: ";
        echo $conexion11['ID'];
        echo "<br>";
        echo "Descripcion: ";
        echo $conexion11['descripcion'];
        echo "<br>";
        echo "Unidad: ";
        echo $conexion11['unidad'];
        echo "<br>";
        echo "Stock: ";
        echo $conexion11['stock'];
        echo "<br>";
    }


    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "<br><br><br>Punto 2: Conexion ok<br>";

        $conexion2 = $conexion->query("SELECT * FROM `stock` ORDER BY ID DESC");


        foreach ($conexion2 as $conexion22){   
        echo "Stock: ";
        echo $conexion22['stock'];
        echo "<br>";
        echo "Unidad: ";
        echo $conexion22['unidad'];
        echo "<br>";
        echo "Descripcion: ";
        echo $conexion22['descripcion'];
        echo "<br>";
        echo "ID: ";
        echo $conexion22['ID'];
        echo "<br>";



    }

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "<br><br>Punto 3: Conexion ok<br><br>";

        $conexion3 = $conexion->query("SELECT * FROM `stock` WHERE descripcion LIKE '%led%'");

        
        foreach ($conexion3 as $conexion33){   
        echo $conexion33['descripcion'];
        echo "<br>";

        
    }

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "<br><br>Punto 4: Conexion ok<br><br>";

        $conexion4 = $conexion->query("SELECT * FROM `stock` WHERE descripcion LIKE '%el%'");

        
        foreach ($conexion4 as $conexion44){   
        echo $conexion44['descripcion'];
        echo "<br>";

        
    }

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>
</body>
</html>