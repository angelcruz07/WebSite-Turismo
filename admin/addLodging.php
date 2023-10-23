<?php
require "partials/header.php";
require "partials/navbar.php";
require "config/database.php";



?>

<section id="add-event" class="add-event">

  <h1 class="title-index"> Agregar dato al blog</h1>
  <!-- <p>Llena el formulario para agregar un nuevo blogo a la pagina</p> -->
  <div class="container-event-crud">

    <div class="container-form-event">
      <h2 class="title-blog">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>

        <div class="form-group">
          <label for="title"> Agrega un título:</label>
          <input type="text" value="<?php echo $title ?>" name="title" id="title" required maxlength="22">
        </div>

        <div class="form-group">
          <label for="description"> Agrega una Descripción:</label>
          <input type="text" value="<?php echo $description; ?>" name="description" id="description" required maxlength="220">
        </div>


        <div class="form-group">
          <label for="image">Agrega una imagen:</label><br>
          <?php if ($image != "") { ?>
            <img src="../admin/assets/imgBlog/<?php echo $image ?>" title="Imagen seleccionada" width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>

        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion" class="form-btn primary">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?>value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>

      </form>
    </div>

    <div class="contaier-events-add">
      <h2 class="title-event">Publicadas</h2>
      <table class="info-crud">
        <thead>
          <tr class="event-add">
            <th class="date-event-colum id">ID</th>
            <th class="date-event-colum title">Titulo</th>
            <th class="date-event-colum description ">Descripcion</th>
            <th class="date-event-colum image">Imagen</th>
            <th class="date-event-colum option">Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($blogs as $blog) { ?>
            <tr class="event-add">
              <td class="date-event id"><?php echo $blog['id'] ?></td>
              <td class="date-event title"><?php echo $blog['title'] ?></td>
              <td class="date-event descrption"><?php echo $blog['description'] ?></td>
              <td class="date-event image">
                <img src="../admin/assets/imgBlog/<?php echo $blog['image'] ?>" width="50px">
              </td>

              <td class="date-event btn-flex option">

                <form method="POST">
                  <input type="hidden" name="id" id="id" value="<?php echo $blog['id'] ?>" />
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
