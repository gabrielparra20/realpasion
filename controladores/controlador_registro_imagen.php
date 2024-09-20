<?php
if (!empty($_POST["btnregistrar"])) {
    if (isset($_FILES["txting"]) && $_FILES["txting"]["error"] == 0) {
        try {
            $imagen = addslashes(file_get_contents($_FILES["txting"]["tmp_name"]));
        } catch (Exception $e) {
            $imagen = "";
        }
        if ($imagen != "") {
            if ($imagen == true) {
                echo "<div class='alert alert-success'>imagen registrado correctamente </div>";
            }
            $sql = $conexion->query("INSERT INTO imagen(img) VALUES ('$imagen')");
        } else {
            echo "<div class='alert alert-danger'>Error al procesar la imagen.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>debes seleccionar una imagen </div>";
    } ?>

    <script>
        (function(){
            var not = function(){
                window.history.replaceState(null,null,window.location.pathname);
            }
            setTimeout(not, 0);
        }())
    </script>
 <?php }


    ?>