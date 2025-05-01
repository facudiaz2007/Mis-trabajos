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
        $conexion1 = new PDO('mysql:host=localhost;dbname=obra social et20','root', '');
        echo "Punto 1: Conexion ok <br>";

        $conexion1->query("INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`) VALUES (NULL, 'facudiaz', 'contraseña1')"); 
        $conexion1->query("INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`) VALUES (NULL, 'marcosgodoy', 'contraseña2')"); 
        $conexion1->query("INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`) VALUES (NULL, 'emivela', 'contraseña3')"); 
        $conexion1->query("INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`) VALUES (NULL, 'negrofernandez', 'contraseña4')"); 
        $conexion1->query("INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`) VALUES (NULL, 'gonzabordon', 'contraseña5')");
        

    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>

<?php
    try {
        $conexion2 = new PDO('mysql:host=localhost;dbname=obra social et20','root', '');
        echo "<br><br> Punto 2: Conexion ok <br>";

        $conexion2->query("INSERT INTO `socios` (`ID`, `nombre`, `dni`, `direccion`, `telefono`) VALUES (NULL, 'facudiaz', '47799331', 'La Bombonera', '777777')");
        $conexion2->query("INSERT INTO `socios` (`ID`, `nombre`, `dni`, `direccion`, `telefono`) VALUES (NULL, 'marcosgodoy', '47799281', 'Monumental', '346149')");
        $conexion2->query("INSERT INTO `socios` (`ID`, `nombre`, `dni`, `direccion`, `telefono`) VALUES (NULL, 'emivela', '46928372', 'Monumental', '895360')");
        $conexion2->query("INSERT INTO `socios` (`ID`, `nombre`, `dni`, `direccion`, `telefono`) VALUES (NULL, 'negrofernandez', '45824125', 'Monumental', '850364')");
        $conexion2->query("INSERT INTO `socios` (`ID`, `nombre`, `dni`, `direccion`, `telefono`) VALUES (NULL, 'gonzabordon', '46789241', 'NoTieneCasa', '125379')");


    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion3 = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "<br><br> Punto 3: Conexion ok <br>";

        $conexion3->query("INSERT INTO `stock` (`ID`, `descripcion`, `unidad`, `stock`) VALUES (NULL, 'tv led de 50 pulgadas', 'un.', '5')");
        $conexion3->query("INSERT INTO `stock` (`ID`, `descripcion`, `unidad`, `stock`) VALUES (NULL, 'heladera whirlpool', 'un.', '10')");
        $conexion3->query("INSERT INTO `stock` (`ID`, `descripcion`, `unidad`, `stock`) VALUES (NULL, 'equipo de audio aiwa', 'un.', '12')");
        $conexion3->query("INSERT INTO `stock` (`ID`, `descripcion`, `unidad`, `stock`) VALUES (NULL, 'Celular Samsung Galaxy 4GB 128GB Blue', 'un.', '20')");

    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion4 = new PDO('mysql:host=localhost;dbname=obra social et20','root', '');
        echo "<br><br> Punto 4: Conexion ok <br>";
        $conexion4->query("DELETE FROM usuarios WHERE `ID` = 3");


    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion5 = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "<br><br> Punto 5: Conexion ok <br>";
        
        $conexion5->query("UPDATE `stock` SET `descripcion` = 'heladera smart wifi samsung' WHERE `stock`.`ID` = 10");


    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>

<?php
    try {
        $conexion6 = new PDO('mysql:host=localhost;dbname=stock et20','root', '');
        echo "<br><br> Punto 5: Conexion ok <br>";
        
        $producto = 'smartwatch';
        $stock = 20;

        $conexion6->query("INSERT INTO `stock` (`ID`, `descripcion`, `unidad`, `stock`) VALUES (NULL, '$producto', 'un.', '$stock')");




    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>
</body>
</html>