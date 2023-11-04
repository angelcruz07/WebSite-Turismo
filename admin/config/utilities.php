<?php

/**
 * Validar el rol de administrador
 *
 * @return void
 */
function validateRol()
{
  session_start();
  if (!isset($_SESSION["rol"])) {
    header("Location: login.php");
  } else {
    if ($_SESSION['rol'] != 1) {
      header('location: login.php');
    }
  }
}

/**
 * Insertar un nuevo registro 
 *
 * @param object $conn conexion a la base de datos
 * @param array $data array con los datos a ingresar 
 * @param array $validFields array con los campos de la base de datos 
 * @return void
 */
function insertRegister($conn, $data = [], $validFields = [])
{
  $table = isset($data['table']) ? $data['table'] : 'default_table';

  $insertData = array();
  foreach ($validFields as $field) {
    if (isset($data[$field])) {
      $insertData[$field] = $data[$field];
    }
  }
  // Llamar a loadImage para obtener el nombre del archivo
  $nameFile = loadImage($_FILES["image"], $data['carpet']);
  // Agregar el nombre del archivo al array de datos
  $insertData['image'] = $nameFile;
  // Construir la consulta SQL con los campos válidos
  $sql = $conn->prepare("INSERT INTO $table (" . implode(', ', array_keys($insertData)) . ") VALUES (" . implode(', ', array_fill(0, count($insertData), '?')) . ");");
  $sql->execute(array_values($insertData));
}


//Sirve
/**
 * Cargar imagen a la base de datos
 *
 * @param string $image ruta de nuesta imagen en la base de datos
 * @param string $carpet nombre de la carpeta donde se almacena la imagen 
 * @return void
 */
function loadImage($image, $carpet)
{
  $date = new DateTime();
  $nameFile = ($image != "") ? $date->getTimestamp() . "_" . $_FILES["image"]["name"] : "imagen.jpg";
  $tmpImage = $_FILES["image"]["tmp_name"];

  if ($tmpImage != "") {
    move_uploaded_file($tmpImage, "../admin/assets/$carpet/" . $nameFile);
  }

  return $nameFile;
}


//ACTUZALIZAR REGISTRO 
function editRegister($conn, $data = [], $validFields = [])
{
  $table = ($data['table']);

  $insertData = array();
  $columnFragments = array();

  foreach ($validFields as $field) {
    if (isset($data[$field])) {
      $insertData[$field] = $data[$field];
      $columnFragments[] = "$field = :$field"; // Cada columna debe tener un único marcador de posición
    }
  }
  // Construir la consulta SQL con los campos válidos
  $sql = $conn->prepare("UPDATE $table SET " . implode(', ', $columnFragments) . " WHERE id=:id");
  $sql->bindValue(':id', $data['id']);

  // Asociar los valores de marcadores de posición
  foreach ($insertData as $field => $value) {
    $sql->bindValue(":$field", $value);
  }
  // Ejecutar la consulta preparada
  $sql->execute();
}

function editImage($conn, $id, $image)
{
  if ($image != "") {
    $date = new DateTime();
    $nameFile = $date->getTimestamp() . "_" . $_FILES["image"]["name"];
    $tmpImage = $_FILES["image"]["tmp_name"];

    move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);

    $sql = $conn->prepare("SELECT image FROM events WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $event = $sql->fetch(PDO::FETCH_ASSOC);

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
}

// Actualizar el registro o editar 
// function editRegister($conn, $type, $title, $description, $id, $image, $table, $carpet)
// {
//   updateRegisterData($conn, $type, $title, $description, $id, $table);
//   handleImage($conn, $id, $image, $table, $carpet);
// }


// function updateRegisterData($conn, $type, $title, $description, $id, $table)
// {
//   $sql = $conn->prepare("UPDATE $table SET type=:type, title=:title, description=:description WHERE id=:id");
//   $sql->bindParam(':type', $type);
//   $sql->bindParam(':title', $title);
//   $sql->bindParam(':description', $description);
//   $sql->bindParam(':id', $id);
//   $sql->execute();
// }
// function handleImage($conn, $id, $image, $table, $carpet)
// {
//   if (!empty($image)) {
//     $nameFile = uploadImage($image);
//     deleteOldImage($conn, $id, $table, $carpet);
//     updateImage($conn, $id, $nameFile, $table);
//   }
// }




/**
 * Actualizar la imagen de la consulta
 *
 * @param string $image ruta de la imagen en memoria
 * @return void
 */
function uploadImage($nameFile)
{
  $date = new DateTime();
  $nameFile = $date->getTimestamp() . "_" . $_FILES["image"]["name"];
  $tmpImage = $_FILES["image"]["tmp_name"];
  move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);
  return $nameFile;
}




// Funciona
/**
 * Actualizar imagen de la base de datos
 *
 * @param PDO $conn
 * @param int $id
 * @param string $nameFile
 * @param string $table
 * @return void
 */
function updateImage($conn, $id, $nameFile, $table)
{
  $sql = $conn->prepare("UPDATE $table SET image=:image WHERE id=:id");
  $sql->bindParam(':image', $nameFile);
  $sql->bindParam(':id', $id);
  $sql->execute();
}







/**
 * Seleccionar consultas agregadas y mostrarlas en el formulario
 *
 * @param object $conn recuperar la conexion a la base de datos 
 * @param int $id  identificador de la consulta
 * 
 *  @return array|null Devuelve el registro como un arreglo asociativo o NULL si no se encontró ninguna coincidencia.s
 */
function selectRegister(object $conn, int $id, string $table)
{
  $sql = $conn->prepare("SELECT * FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $event = $sql->fetch(PDO::FETCH_ASSOC);

  return $event;
}






// Funcion arreglada necesito hacer lo mismo con la funcion de eliminar 
/**
 * Eliminar registro 
 *
 * @param object $conn
 * @param integer $id
 * @param string $table
 * @param string $carpet
 * @return void
 */
function deleteRegister(object $conn, int $id, string $table, string $carpet)
{
  $sql = $conn->prepare("SELECT image FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();

  $deleteImage = $sql->fetch(PDO::FETCH_LAZY);
  if (file_exists("../admin/assets/$carpet/" . $deleteImage["image"])) {
    unlink("../admin/assets/$carpet/" . $deleteImage["image"]);
  }

  $sql = $conn->prepare("DELETE FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
}

/**
 * Consulta del registro para mostrarlo en una tabla
 *
 * @param object $conn Recuperar la conexion a Mysql
 * @param string $table Nombre de la tabla a la que se desar consultar
 * @return array $query devolvemos un array asosiativo  con los datos de las tabla
 */
function  getQuery(object $conn, string $table)
{
  $query = $conn->prepare("SELECT * FROM $table");
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
