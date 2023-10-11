<?php
    require "partials/header.php";
    require "partials/navbar.php";
?>
  
<?php
//Archivo de conecion a la base de datos
require "config/database.php";
//Recuperar coneccion de database
$database = new Database();  
$conn = $database->connect();

//Recibir los datos del formulario
$title = (isset($_POST['title']))?$_POST['title']:"";  
$description = (isset($_POST['description']))?$_POST['description']:"";
$image = (isset($_FILES['image']['name']))?$_FILES['image']['name']:"";
$action = (isset($_POST['accion']))?$_POST['accion']:"";

switch ($action){ 
  case "Agregar";
//Preparando las sentencias sql
      $sql = $conn->prepare("INSERT INTO events (title, description, image) VALUES (:title,:description,:image);");
      // Insertando los datos con la variables
      $sql->bindParam(':title',$title);
      $sql->bindParam(':description',$description);
      $sql->bindParam(':image',$image);
      $sql->execute();
      break;
    case "Modificar";
       echo "Presionado boton de modificar";
       break;
    case "Cancelar";
      echo "Presionado boton de cancelar";
      break;
}
// Haciendo la consulta a los registros 
$query = $conn->prepare("SELECT * FROM events");
$query -> execute();
$events = $query->fetchAll(PDO::FETCH_ASSOC);


?>
<section id="add-event" class="add-event">

  <h1 class="title-event"> Agregar un nuevo evento</h1>
  <!-- <p>Llena el formulario para agregar un nuevo evento a la pagina</p> -->
  <div class="container-event-crud">

    <div class="container-form-event">
      <h2>Nueva publicacion</h2>

      <form  method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <label for="title"> Agrega un título:</label>
          <input type="text" name="title" id="title" required="">
        </div>

        <div class="form-group">
          <label for="description"> Agrega una Descripción:</label>
          <input type="text" name="description" id="description" required="">
        </div>
        <div class="form-group">
          <label for="image">Agrega una imagen:</label>
          <input type="file" name="image" id="image" required="">
        </div>


        <div class="group-buttons">
          <button type="submit" value="Agregar" name="accion" class="form-btn">Agregar</button>
          <button type="submit" value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button type="submit" value="Cancelar" name="accion" class="form-btn">Cancelar</button>
        </div>

      </form>
    </div>

    <div class="contaier-events-add">
      <h2>Modificar publicaciones</h2>
      <table class="info-crud">
        <thead>
          <tr class="event-add">
            <th class="date-event-colum">Titulo</th>
            <th class="date-event-colum">Descripcion</th>
            <th class="date-event-colum">Imagen</th>
            <th class="date-event-colum">Opciones</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach($events as $event) {?>
          <tr class="event-add">
            <td class="date-event"><?php echo $event ['title']?></td>
            <td class="date-event"><?php echo $event ['description']?></td>
            <td class="date-event"><?php echo $event ['image']?></td>
            <td class="date-event"> seleccionar | borrar</td>
          </tr>
          <?php }?>

        </tbody>
      </table>
    </div>
  </div>
</section>
<?php require "./partials/footer.php" ?>
