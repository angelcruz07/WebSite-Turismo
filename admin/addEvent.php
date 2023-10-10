<?php
//conexion a la tabla events
$server = "localhost";
$user = "root";
$password = "";
//try{ 
// $connection = new PDO("mysql:host=$server;dbname=tourism", $user, $password); 
// $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
// echo "Conexion realizada";
//} 
//catch(PDOException $e){ 
// echo "La conexion ha fallado" .$e->getMessage();
//} 
//$connection= null;  

//Validacion de los datos  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validar que los campos no estén vacíos y que la imagen se haya subido correctamente
  if (!empty($_POST['title']) && !empty($_POST['description']) && isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);

    try {
      // Realizar la conexión a la base de datos
      $connection = new PDO("mysql:host=$server;dbname=tourism", $user, $password);
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Conexion realizada";

      // Preparar la consulta para la inserción
      $sql = "INSERT INTO events (title, description, image) VALUES (:title, :description, :image_data)";
      $stmt = $connection->prepare($sql);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':description', $description);
      $stmt->bindParam(':image_data', $imageData, PDO::PARAM_LOB);
      $stmt->execute();

      echo "Datos insertados correctamente.";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión
    $connection = null;
  } else {
    echo "Por favor, complete todos los campos del formulario y suba una imagen.";
  }
} else {
  echo "Acceso no válido.";
}
?>

<?php
require "partials/header.php";
require "partials/navbar.php";
?>
<section id="add-event" class="add-event">

  <h1 class="title-event"> Agregar un nuevo evento</h1>
  <!-- <p>Llena el formulario para agregar un nuevo evento a la pagina</p> -->
<div class="container-event-crud">

<div class="container-form-event">
  <h2>Nueva publicacion</h2>

  <form action="events.php" method="post" enctype="multipart/form-data" class="form-container">
    <div class="form-group">
        <label for="image">Agrega una imagen:</label>
        <input type="file" name="image" id="image" required="">
    </div>
    <div class="form-group">
        <label for="title"> Agrega un título:</label>
        <input type="text" name="title" id="title" required="">
    </div>
    <div class="form-group">
        <label for="description"> Agrega una Descripción:</label>
        <input type="text" name="description" id="description" required="">
    </div>
    <input type="submit" value="Agregar al sitio" class="form-btn">
</form>
</div>

<div class="contaier-events-add">
  <h2>Modificar publicaciones</h2>
  <div class="info-crud">
    <div class="event-add">
      <div class="date-event-colum">Titulo</div>
      <div class="date-event-colum">Descripcion</div>
      <div class="date-event-colum">Imagen</div>
      <div class="date-event-colum">Opciones</div>
    </div>
    <div class="event-add">
      <div class="date-event"></div>
      <div class="date-event"></div>
      <div class="date-event"></div>
      <div class="date-event"></div>
    </div>
    <div class="event-add">
      <div class="date-event"></div>
      <div class="date-event"></div>
      <div class="date-event"></div>
      <div class="date-event"></div>
    </div>



  </div>

</div>

</div>
</section>
<?php require "./partials/footer.php" ?>
