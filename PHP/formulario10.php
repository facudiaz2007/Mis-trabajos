<?php
if ($_POST){
    if (!empty($_POST['tienda1']) && !empty($_POST['tienda2']) && !empty($_POST['tienda3'])){
        $precio1 =$_POST['tienda1'];
        $precio2 =$_POST['tienda2'];
        $precio3 =$_POST['tienda3'];
        $preciosuma = $precio1 + $precio2 + $precio3;
        $preciomedio = $preciosuma/3;
        echo "El precio promedio es: ".$preciomedio."";
    }
    else{
        echo "<br> No ha Ingresado ninguno de los datos requeridos.";
    }
}
?>