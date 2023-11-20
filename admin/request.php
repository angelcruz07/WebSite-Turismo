<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);
$table = "request";
$requests = getQuery($conn, $table);

//Modificar el status de la solicitud
$id = (isset($_POST['id']) ? $_POST['id'] : "");
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";
if (!empty($id)) {
  $sql = $conn->prepare('UPDATE request SET status = :newStatus WHERE id = :id');
  if ($action === 'Completada') {
    $newStatus = 'Completada';
  } elseif ($action === 'Rechazar') {
    $newStatus = 'Rechazada';
  }
  $sql->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
  $sql->bindParam(':id', $id, PDO::PARAM_INT);
  $sql->execute();
  header('Location: request.php');
}
?>
<?php require "partials/header.php";
require "partials/navbar.php"; ?>
<section id="add-form" class="add-form">
  <div class="container-form-crud">
    <?php foreach ($requests as $request) {
      if (strtolower($request['status']) === 'en revision') {
    ?>
        <div class="container-form-form">
          <h2 class="title-form">Solicitud</h2>
          <form method="POST" enctype="multipart/form-data" class="form-container">
            <div class="container-titles">
              <label class="label-request" for="">Tipo de negocio:</label>
              <label class="label-request">Nombre del negocio:</label>
            </div>
            <div class="container-info">
              <span><?php echo $request["business_type"] ?></span>
              <span><?php echo $request["business"] ?></span>
            </div>
            <div class="container-titles">
              <label class="label-request">Imagen del negocio</label>
              <label class="label-request">Imagen del producto</label>
            </div>
            <div class="container-img-request">
              <img class="img-request" src="../admin/assets/imgUser/<?php echo $request["business_image"] ?>" />
              <img class="img-request" src="../admin/assets/imgUser/<?php echo $request["product_image"] ?>" />
            </div>
            <div class="container-titles">
              <label class="label-request" for="">Descripción del negocio</label>
              <label class="label-request" for="">Tipo de producto</label>
            </div>
            <div class="container-info">
              <span><?php echo $request["description"] ?></span>
              <span><?php echo $request["product_type"] ?></span>
            </div>
            <div class="container-titles">
              <label class="label-request" for="">Nombre del propietario</label>
              <label class="label-request" for="">Dirreccion del local</label>
            </div>
            <div class="container-info">
              <span><?php echo $request["name"] ?></span>
              <span><?php echo $request["address"] ?></span>
            </div>
            <label class="label-request" for="">Numero de contacto</label>
            <span><?php echo $request["phone_number"] ?></span>
          </form>
          <form method="POST" id="custom-register">
            <input type="hidden" name="id" id="id" value="<?php echo $request['id'] ?>" />
            <button type="submit" name="accion" value="Completada" class="btn">Marcar como revisada</button>
            <button type="submit" name="accion" value="Rechazar" class="btn danger">Rechazar</button>
          </form>
        </div>
    <?php }
    } ?>
  </div>
  <div class="container-forms-add req">
    <h2 class="title-form">Historial</h2>
    <table class="info-crud">
      <thead>
        <tr class="form-add">
          <th class="date-form-colum id">ID</th>
          <th class="date-form-colum title">Propietario</th>
          <th class="date-form-colum description ">Descripcion</th>
          <th class="date-form-colum type">Telefono</th>
          <th class="date-form-colum type">Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($requests as $request) {
          if (strtolower($request['status']) !== 'en revision') { ?>
            <tr class="form-add">
              <td class="date-form id"><?php echo $request['id'] ?></td>
              <td class="date-form title"><?php echo $request['name'] ?></td>
              <td class="date-form descrption"><?php echo $request['description'] ?></td>
              <td class="date-form type"><?php echo $request['phone_number'] ?></td>
              <td class="date-form type"><?php echo $request['status'] ?></td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
</section>
