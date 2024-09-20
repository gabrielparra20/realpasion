<?php
if (isset($_GET['eliminar_id'])) {
    $id_imagen = $_GET['eliminar_id'];

    // Ejecutar la consulta DELETE
    $sql = $conexion->query("DELETE FROM imagen WHERE id=$id_imagen");

    // Verificar si la eliminación fue exitosa
    if ($sql) {
        echo "<div class='alert alert-success'>Imagen eliminada correctamente</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar la imagen: " . $conexion->error . "</div>";
    }

    // Redirigir para evitar que se vuelva a eliminar al recargar la página
    header("Location: perfil.php");
    exit;
}
