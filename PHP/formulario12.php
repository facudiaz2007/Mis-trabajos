<?php
$cantidad = 0;
$nombre = $_POST['nombre'];
print_r($_POST);
if (isset($_POST['futbol']) == 'on'){
    $cantidad++;
}
if (isset($_POST['basquet']) == 'on'){
    $cantidad++;
}
if (isset($_POST['voley']) == 'on'){
    $cantidad++;
}
if (isset($_POST['tenis']) == 'on'){
    $cantidad++;
}

echo "<br> Su nombre es ".$nombre." y practica ".$cantidad." de deportes";
?>