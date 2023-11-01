<?php
function redirectToRolePage($rol) {
  switch ($rol) {
      case 1:
          header('Location: admin.php');
          exit();
      case 2:
          header('Location: home.php');
          exit();
      default:
          // Manejar otros roles si es necesario
  }
}
function roles() {
  if (isset($_SESSION["rol"])) {
      // Si ya hay una sesión (el usuario está logueado),
      // redirige a una página que corresponda al rol del usuario
      redirectToRolePage($_SESSION["rol"]);
  }
}
function validateRol(){
  session_start();
if (!isset($_SESSION["rol"])) {
  header("Location: login.php");
} else {
  if ($_SESSION['rol'] != 1) {
    header('location: login.php');
  }
}
}

function addEvent($conn, $type, $title, $description, $date, $image,$dataSend) {
  $sql = $conn->prepare("INSERT INTO events (type, title, description, date, image) VALUES (:type, :title, :description, :date, :image);");
  // Insertar los datos con la variable
  $sql->bindParam(':type', $type);
  $sql->bindParam(':title', $title);
  $sql->bindParam(':description', $description);
  $sql->bindParam(':date' , $dataSend);
  
  //Guardando la iamgen con la fecha en que se agrego
  $date = new DateTime();
  
  $nameFile = ($image != "") ? $date->getTimestamp() . "_" . $_FILES["image"]["name"] : "imagen.jpg";
  $tmpImage = $_FILES["image"]["tmp_name"];

  if ($tmpImage != "") {
    move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);
  }

  $sql->bindParam(':image', $nameFile);
  $date->getTimestamp();
  $sql->execute();
  header("Location:AddEvent.php");
}

function editEvent($conn, $type, $title, $description, $id, $image) {
  $sql = $conn->prepare("UPDATE events SET type=:type, title=:title, description=:description WHERE id=:id");
  $sql->bindParam(':type', $type);
  $sql->bindParam(':title', $title);
  $sql->bindParam(':description', $description);
  $sql->bindParam(':id', $id);
  $sql->execute();

  if ($image != "") {
      $date = new DateTime();
      $nameFile = ($image != "") ? $date->getTimestamp() . "_" . $_FILES["image"]["name"] : "imagen.jpg";
      $tmpImage = $_FILES["image"]["tmp_name"];
      move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);

      $sql = $conn->prepare("SELECT image FROM events WHERE id=:id");
      $sql->bindParam(':id', $id);
      $sql->execute();
      $event = $sql->fetch(PDO::FETCH_LAZY);

      if (isset($event["image"]) && ($event['image'] != "imagen.jpg")) {
          if (file_exists("../admin/assets/imgEvent/" . $event["image"])) {
              unlink("../admin/assets/imgEvent/" . $event["image"]);
          }
      }

      $sql = $conn->prepare("UPDATE events SET image=:image WHERE id=:id");
      $sql->bindParam(':image', $nameFile);
      $sql->bindParam(':id', $id);
      $sql->execute();
  }
  header("Location:AddEvent.php");
}

// Función para seleccionar un evento
function selecEvent($conn, $id ,$title, $description, $image) {
  $sql = $conn->prepare("SELECT * FROM events WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $event = $sql->fetch(PDO::FETCH_LAZY);
  $title = $event['title'];
  $description = $event['description'];
  $image = $event['image'];
}

function deleteEvent($conn, $id) {
  $sql = $conn->prepare("SELECT image FROM events WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $event = $sql->fetch(PDO::FETCH_LAZY);

  if (isset($event["image"]) && ($event['image'] != "imagen.jpg")) {
    if (file_exists("../admin/assets/imgEvent/" . $event["image"])) {
      unlink("../admin/assets/imgEvent/" . $event["image"]);
    }
  }
  $sql = $conn->prepare("DELETE FROM events WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  header("Location:addEvent.php");
}

?>
