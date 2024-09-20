<?php
if (isset($_POST['btneditar'])) {
    // Obtener el ID de la imagen
    $id_imagen = $_POST['id_imagen'];

    // Comprobar si se ha subido una nueva imagen
    if (isset($_FILES['nueva_imagen']) && $_FILES['nueva_imagen']['error'] == 0) {
        $imagen = addslashes(file_get_contents($_FILES['nueva_imagen']['tmp_name']));

        // Ejecutar la consulta UPDATE
        $sql = $conexion->query("UPDATE imagen SET img='$imagen' WHERE id=$id_imagen");
        if ($sql) {
            echo "<div class='alert alert-success'>Imagen modificada correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al modificar la imagen</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Debe seleccionar una imagen</div>";
    }
}

// Manejo del botón de eliminar
if (isset($_POST['btneliminar'])) {
    $id_imagen = $_POST['id_imagen'];

    // Ejecutar la consulta DELETE
    $sql = $conexion->query("UPDATE imagen set img='' WHERE id=$id_imagen");
    if ($sql) {
        echo "<div class='alert alert-success'>Imagen eliminada correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar la imagen</div>";
    }
}
