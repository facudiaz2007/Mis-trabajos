<?php
if ($_POST){
    if (!empty($_POST['altura']) && !empty($_POST['diametro'])){
        $altura =$_POST['altura'];
        $diametro = $_POST['diametro'];
        $radio = $diametro/2;
        $pi = 3.141593;
        $volumen = $pi*$radio*$radio*$altura;
        $resultado = $volumen;
        echo "El volumen del cilindro es: ". $resultado ." metros cubicos.";
    }
    else{
        echo "<br> No ha Ingresado ninguno de los datos requeridos.";
    }
}
?>