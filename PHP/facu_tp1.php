<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="facutp1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
</head>
<body>

    <div class="a">
        <h1>Ejercicio 1</h1>
        <div class="col1">
        <?php
        $fecha = date("d,m,y");
        echo "<p>La fecha de hoy es: " . $fecha . " </p>";
        ?>
        </div>
    </div>




    <div class="b">
        <h1>Ejercicio 2</h1>
        <div class="col1">
            <?php
            $numero = rand(1,100);
            echo "<p>El numero random es: " . $numero . "</p>";
            ?>
        </div>
    </div>




    <div class="c">
        <h1>Ejercicio 3</h1>
        <div class="col1">
            <?php
            $dia = (24);
            $sueldo = (758.43);
            $nombre ="juan";
            $exite = true;
            echo "<p>Dia: ". $dia ."<br> Sueldo: ". $sueldo."<br> Nombre: ". $nombre."<br> Exite: ". $exite."</p>";
            ?>
        </div>
    </div>




    <div class="d">
        <h1>Ejercicio 4</h1>
        <div class="col1">
            <?php
            $nombre = ("Facundo");
            $apellido = ("Diaz");
            $edad = (17);
            $curso = ("Sexto");
            $division = ("Segunda");
            echo "<p>Nombre: ". $nombre ."<br> Apellido: ". $apellido ."<br> Edad: ". $edad ."<br> Curso: ". $curso. "<br> Division: ". $division. "</p>";
            ?>
        </div>
    </div>




    <div class="e">
        <h1>Ejercicio 5</h1>
        <div class="col1">
            <?php
            $num = rand(1,3);
            if ($num == 1){
                echo "El numero (". $num .") es uno.";
            }
            elseif ($num == 2){
                echo "El numero (". $num .") es dos.";
            }
            else {
                echo "El numero (". $num .") es tres.";
            }
            ?>
        </div>
    </div>




    <div class="f">
        <h1>Ejercicio 6</h1>
        <div class="col1">
            <?php
                $num = 1;
                while ($num < 101){
                $num++;
                }
                for ($num2 = 1; $num2 < 101; $num2++){
                    echo $num2. " ";
                }
            ?>
        </div>
    </div>




    <div class="g">
        <h1>Ejercicio 7</h1>
        <div class="col1"> 
            <?php
            for ($numpar = 1; $numpar <= 100; $numpar++){
                if (($numpar % 2) == 0){
                    echo $numpar. " ";
            }
            }
            ?>
        </div>
    </div>




    <div class="h">
        <h1>Ejercicio 8</h1>
        <div class="col1">
            <?php
            $numimpar = 0;
            while ($numimpar < 100){
                $numimpar++;
                if (($numimpar % 2) == 1){
                    echo $numimpar. " ";
                }
            }  
        ?>
        </div>
    </div>




    <div class="i">
        <h1>Ejercicio 9</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="form">
            Ingrese la altura (en metros): <input type="number" name="altura" value="altura">
            <br>
            Ingrese el diametro (en metros): <input type="number" name="diametro" value="diametro">
            <br>
            <input value="Calcular" type="submit">
            <br>
        </div>
    </form>
        <div class="result">
            <?php
                if ($_POST){
                    if (!empty($_POST['altura']) && !empty($_POST['diametro'])){
                        $altura =$_POST['altura'];
                        $diametro = $_POST['diametro'];
                        $radio = $diametro/2;
                        $pi = 3.141593;
                        $volumen = $pi*$radio*$radio*$altura;
                        $resultado = $volumen;
                        echo "El volumen del cilindro es: ". $resultado ." metros cubicos. <br>";
                        print_r($_POST);
                    }
                    else{
                        echo "<br> No ha Ingresado ninguno de los dos datos.";
                    }
                }
            ?>
        </div>
    </div>




    <div class="j">
        <h1>Ejercicio 10</h1>
    <form class="col1" action="formulario10.php" method="post">
        Precio de las Oreos:
        <br>
        Tienda 1- Ingrese el precio en pesos: <input type="number" name="tienda1">
        <br>
        Tienda 2- Ingrese el precio en pesos: <input type="number" name="tienda2">
        <br>
        Tienda 3- Ingrese el precio en pesos: <input type="number" name="tienda3">
        <br>
        <input value="Calcular" type="submit">
    </form>
    </div>




    <div class="k">
        <h1>Ejercicio 11</h1>
    <form class="col1" action="formulario11.php" method="post">
            <div class="1">Ingrese el caudal disponible en litros/minuto: <input type="number" name="litroxminu"></div>
            <br>
            <div class="2">Ingrese la altura (en metros): <input type="number" name="altura" value="altura"></div>
            <br>
            <div class="3">Ingrese el diametro (en metros): <input type="number" name="diametro" value="diametro"></div>
            <br>
            <input value="Calcular" type="submit">
            <br>
    </form>
    </div>




    <div class="l">
        <h1>Ejercicio 12</h1>
    <form class="col1" action="formulario12.php" method="post">
        Ingrese su nombre: <input type="text" name="nombre">
        <input value="Enviar" type="submit">
        <br>
        Que deportes realizas?
        <br>
        Futbol <input type="checkbox" name="futbol">
        <br>
        Basquet <input type="checkbox" name="basquet">
        <br>
        Voley <input type="checkbox" name="voley">
        <br>
        Tenis <input type="checkbox" name="tenis">
    </form>
    </div>
</body>
</html>