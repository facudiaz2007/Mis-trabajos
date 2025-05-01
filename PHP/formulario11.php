<?php
if ($_POST){
    if (!empty($_POST['altura']) && !empty($_POST['diametro']) && !empty($_POST['litroxminu'])){
        $litroxminu =$_POST['litroxminu'];
        $altura =$_POST['altura'];
        $diametro = $_POST['diametro'];
        $radio = $diametro/2;
        $pi = 3.141593;
        $volumen = $pi*$radio*$radio*$altura;
        $vlitro = $volumen * 1000;
        $tminutos = $vlitro/$litroxminu;
        echo $tminutos;
    }
    else{
    echo "<br> No ha Ingresado ninguno de los datos requeridos.";
    }
}
?>