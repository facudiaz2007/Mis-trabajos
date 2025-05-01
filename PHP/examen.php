<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="examen.css">
   </div>
   <style>
    h1 {color: red}
    h2 {color: blue}
  </style>
</head>
<body>
    <div class="cabecera">
    <div class="col"><h1>Cabecera</h1></div>
    </div>
        <?php
        //Ejercicio 2
        echo "Hola mundo<br>";

        //Ejercicio 3
        $num1 = rand(1,100);
        $num2 = rand(1,100);
        $resultado = $num1 + $num2;
        echo "El numero ".$resultado." es la suma entre los numeros: ".$num1." y ".$num2."<br>";

        //Ejercicio 4
        $num = 1;
        for ($num = 1; $num < 11; $num++){
            echo "Numero ".$num. " <br>";
        }

        //Ejercicio 5
        $num = rand(1,100);
        if($num < 50){
            echo "<br><h1>El numero es menor (".$num.") </h1>";
        }
        else{
            echo "<br><h2>El numero es mayor (".$num.") </h2>";
        }

        //Ejercicio 6
        $arreglo = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
        count($arreglo);
        print_r($arreglo);
        for ($arreglo = 0; $arreglo <= 4; $arreglo++){
            if ($arreglo == 0){
                echo $arreglo. " ";
        }
        }
        print_r($arreglo);
        ?>
</body>
</html>