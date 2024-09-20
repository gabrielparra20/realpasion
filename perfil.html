<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/perfil.css">
  <script src="https://kit.fontawesome.com/dd0b8ec39a.js" crossorigin="anonymous"></script>
  <title>Preview de Imagen</title>
</head>

<body>

  <?php
  include("./modelo/conexion.php");
  include("./controladores/controlador_registro_imagen.php");
  include("./controladores/controlador_editar.php");
  include("./controladores/controlador_eliminar.php");

  $sql = $conexion->query("SELECT * FROM imagen");
  ?>
  <main class="formulario">
    <h1>Editar perfil</h1>
    <form method="post" action="#" enctype="multipart/form-data">
      <div>
        <img src="./imagenes/logo-usuario.webp" alt="avatar" id="img" />
        <input type="file" name="foto" id="foto" accept="image/*" />
        <label for="foto">Cambiar foto</label>
      </div>
      <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" autocomplete="off" />
      </div>
      <div>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" autocomplete="off" />
      </div>

      <div>
        <button type="submit">Guardar cambios</button>
      </div>
    </form>
  </main>

  <div class="p-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      registrar imagen
    </button>

    <!-- Modal registrar -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">registro de imagenes </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" enctype="multipart/form-data" method="POST">
              <input type="file" name="txting" class="form-control">
              <button class="w-100 btn btn-primary mt-2" name="btnregistrar" value="ok" type="submit"> registrar</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <table class="table table-have w-100">
      <h1>crud de imagenes </h1>
      <thead class="bg-primary text-white">
        <tr>
          <th scope="col">CODIGO</th>
          <th scope="col">FOTO</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($datos = $sql->fetch_object()) { ?>
          <tr>
            <th scope="row"><?= $datos->id ?></th>
            <td>
              <img style="width: 140px;" src="data:image/jpg;base64,<?= base64_encode($datos->img) ?>" alt="">
            </td>
            <td>
              <a href="" data-bs-toggle="modal" data-bs-target="#editar<?= $datos->id ?>" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
              <a href="perfil.php?eliminar_id=<?= $datos->id ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta imagen?');">
                <i class="fa-solid fa-trash"></i>
              </a>




            </td>
          </tr>

          <!-- Modal editar -->
          <div class="modal fade" id="editar<?= $datos->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">modificar imagenes </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div>
                    <img style="width: 140px;" src="data:image/jpg;base64,<?= base64_encode($datos->img) ?>" alt="">
                  </div>
                  <form action="" enctype="multipart/form-data" method="POST">
                    <input type="file" name="nueva_imagen" class="form-control">
                    <input type="hidden" name="id_imagen" class="form-control" value="<?= $datos->id ?>">
                    <button class="w-100 btn btn-primary mt-2" name="btneditar" value="ok" type="submit">modificar</button>
                    <button class="w-100 btn btn-primary mt-2" name="btneliminar" value="ok" type="submit">eliminar imagen</button>
                  </form>
                </div>

              </div>
            </div>
          </div>

        <?php };

        ?>


      </tbody>
    </table>
  </div>
  <script src="js/perfil.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>