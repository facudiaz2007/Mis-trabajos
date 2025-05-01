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
        $conexion1 = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "Punto 1: Conexion ok <br>";
        $conexion1->query("SELECT * FROM `stock` ORDER BY ID ASC");
        

        echo "Este es el tipo de la variable: ".gettype($conexion1);
        echo "<br>";
        echo "Esto es lo que devuelve la consulta query: ";
        print_r($conexion1);
        echo "<br>";

        foreach ($conexion1 as $conexion11)
        {   
            echo "Esto es lo que contiene la tabla 'stock': ";
            print_r($conexion11);
            echo"<br>";
        }



    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion2 = new PDO('mysql:host=localhost;dbname=','root', '');
        echo "<br><br> Punto 2: Conexion ok <br>";
        $conexion2->query("");

    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>
</body>
</html>