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
  
  <section class="events"> 
  <form action="events.php" method="post" enctype="multipart/form-data">
    <label for="image">Selecciona una imagen:</label>
    <input type="file" name="image" id="image" required="">  
    <br><br>
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required="">  
    <br><br>
    <label for="description">Descripción:</label>
    <input type="text" name="description" id="description" required=""> 
    <br><br>
    <input type="submit" value="Enviar">
  </form>
</section>
