<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre_cap = $_POST['nombre_cap'] ?? '';
    $nombre_sub = $_POST['nombre_sub'] ?? '';
    $tel_cap = $_POST['tel_cap'] ?? '';
    $tel_sub = $_POST['tel_sub'] ?? '';

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
        $nombreArchivo = basename($_FILES['imagen']['name']);
        $rutaDestino = 'imagenes/' . $nombreArchivo;

        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
            echo "Turno solicitado con éxito. Imagen subida.";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "No se subió ninguna imagen.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
