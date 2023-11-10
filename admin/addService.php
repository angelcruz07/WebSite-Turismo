<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);
?>

<?php require "partials/header.php";
require "partials/navbar.php"; ?>

<section id="add-form" class="add-form">
  <h1 class="title-index">Agregar un servicio</h1>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="title">Nombre del hospedaje</label>
          <input type="text" value="<?php echo $name; ?>" name="name" id="name" maxlength="30">
        </div>
        <div class="form-group">
          <label for="phone_number"> Agrega un numero de contacto:</label> <input type="text" value="<?php echo $phone_number; ?>" name="phone_number" id="phone_number" maxlength="22">
        </div>
        <div class="form-group">
          <label for="description">Ubicacion del hotel en google (URL)</label>
          <textarea name="location" id="location" maxlength="300" class="textarea" rows="4" cols="30"><?php echo $url_lodging; ?></textarea>
        </div>
        <div class=" form-group">
          <label for="image">Agrega una imagen:</label><br>
          <?php if ($image != "") { ?>
            <img src="<?php echo $url ?>/admin/assets/imgLodging/<?php echo $image ?>" title="Imagen seleccionada" width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>
        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion" class="form-btn primary">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button type="submit" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>

    <div class="container-forms-add">
      <h2 class="title-form">Publicadas</h2>
      <table class="info-crud">
        <thead>
          <tr class="form-add">
            <th class="date-form-colum id">ID</th>
            <th class="date-form-colum title">Nombre</th>
            <th class="date-form-colum description ">Descripcion</th>
            <th class="date-form-colum image">Imagen</th>
            <th class="date-form-colum type">Telefono</th>
            <th class="date-form-colum option">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lodgings as $lodging) { ?>
            <tr class="form-add">
              <td class="date-form id"><?php echo $lodging['id'] ?></td>
              <td class="date-form title"><?php echo $lodging['name'] ?></td>
              <td class="date-form descrption"><?php echo $lodging['description'] ?></td>
              <td class="date-form image">
                <img src=../admin/assets/imgLodging/<?php echo $lodging['image'] ?> width="40px">
              </td>
              <td class="date-form type"><?php echo $lodging['phone_number'] ?></td>
              <td class="date-form btn-flex option">
                <form method="POST" id="custom-register">
                  <input type="hidden" name="id" id="id" value="<?php echo $lodging['id'] ?>" />
                  <button type="submit" name="accion" value="Seleccionar" class="btn primary">Editar</button>
                  <button type="submit" name="accion" value="Borrar" class="btn danger">Borrar</button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?php require "./partials/footer.php" ?>
