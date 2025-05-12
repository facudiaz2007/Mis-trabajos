<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'] ?? '';
    $cancha = $_POST['canchas'] ?? '';
    $fecha = $_POST['fecha'] ?? '';
    $hora = $_POST['hora'] ?? '';

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
