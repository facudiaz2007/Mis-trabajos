<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="proyecto.css">
</head>
<body>
    <header class="cabecera">
        <h1>Foro de discusion</h1>
    </header>
    
<div class="conteiner">

    <div class="a">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <br>
        Ingrese el tema:
        <input type="text" name="tema">
        
        <input type="submit" value="Registrar">
    </form>

    <?php
    try{
        $insert = new PDO('mysql:host=localhost;dbname=foro de discusion','root', '');

        $temanuevo = $_POST['tema'];
        $php=fopen("$temanuevo.php", "a") or die("Problemas en la creacion");
        fputs($php, "<?php include 'vars.php'; ?>");
        fclose($php);
        echo "Los datos se cargaron correctamente. <br>(".$temanuevo.".php)<br>";

        $insert->query("CREATE TABLE `foro de discusion`.`$temanuevo` (`ID` INT NOT NULL AUTO_INCREMENT , `comentarios` VARCHAR(100) NOT NULL , PRIMARY KEY (`ID`))");


        /////////////$insert->query("INSERT INTO `$php` (`ID`, `temas`, `comentarios`) VALUES (NULL, 'messi', 'Messi es el mejor')");

        
        //$insert1 = $insert->query("SELECT * FROM `temas` WHERE 10");
        //foreach ($select1 as $select2){   
        //    echo $select2['temas'];


        //}
    }   catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
    ?>
    </div>







    <div class="b">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <br>
        Ingrese su nombre:
        <input type="text" name="nombre">
            <br>
        Comentarios:
            <br>
        <textarea name="comentarios" rows="10" cols="40"></textarea>
            <br>
        <input type="submit" value="Registrar">
    </form>
    <?php
    try {
        //$select = new PDO('mysql:host=localhost;dbname=foro de discusion','root', '');
        $fecha = date("d/m/y");
        //$select->query("SELECT * FROM temas");




        $conexion=mysqli_connect("localhost","root","","foro de discusion") or die("Problemas con la conexión");

        mysqli_query($conexion,"INSERT INTO `$temanuevo` (`ID`, `comentarios`) VALUES (NULL,'$_REQUEST[comentarios]")
        or die("Error. ".mysqli_error($conexion));
        mysqli_close($conexion);

        if ($_POST){
            if (!empty($_POST['nombre']) && !empty($_POST['comentario'])){
                $nombre = $_POST['nombre'];
                $comentario = $_POST['comentario'];
                echo "<br> Fecha de publicacion <br> " . $fecha . " </p> <br>";
                echo $nombre. " <br> " .$comentario;
        
                
            }
            else{
            echo "<br> Error.";
            }
        }
    }  catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
    ?>
    </div>


</div>
</body>
</html>