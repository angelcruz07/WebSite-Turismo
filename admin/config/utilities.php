<?php

/**
 * Redirecion dependiendo el rol del usuario
 *
 * @param [int] $rol valor de int en la base de datos
 * @return void
 */
function redirectToRolePage($rol)
{
  switch ($rol) {
    case 1:
      header('Location: admin.php');
      exit();
    case 2:
      header('Location: home.php');
      exit();
    default:
  }
}

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
 * @param  $conn
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

/**
 * Cargar imagen a la base de datos
 *
 * @param [string] $image ruta de nuesta imagen en la base de datos
 * @param [string] $carpet nombre de la carpeta donde se almacena la imagen 
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


// Actualizar el registro o editar 
function editRegister($conn, $type, $title, $description, $id, $image, $table)
{
  updateRegisterData($conn, $type, $title, $description, $id, $table);
  handleImage($conn, $id, $image, $table);
}


function updateRegisterData($conn, $type, $title, $description, $id, $table)
{
  $sql = $conn->prepare("UPDATE $table SET type=:type, title=:title, description=:description WHERE id=:id");
  $sql->bindParam(':type', $type);
  $sql->bindParam(':title', $title);
  $sql->bindParam(':description', $description);
  $sql->bindParam(':id', $id);
  $sql->execute();
}
function handleImage($conn, $id, $image, $table)
{
  if (!empty($image)) {
    $nameFile = uploadImage($image);
    deleteOldImage($conn, $id, $table);
    updateImage($conn, $id, $nameFile, $table);
  }
}

/**
 * Actualizar la imagen de la consulta
 *
 * @param string $image ruta de la imagen en memoria
 * @return void
 */
function uploadImage($image)
{
  $date = new DateTime();
  $nameFile = $date->getTimestamp() . "_" . $_FILES["image"]["name"];
  $tmpImage = $_FILES["image"]["tmp_name"];
  move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);
  return $nameFile;
}

/**
 * Eliminar la imagen de la carpeta
 *
 * @param PDO $conn
 * @param int $id
 * @param string $table
 * @return void
 */
function deleteOldImage($conn, $id, $table)
{
  $sql = $conn->prepare("SELECT image FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $deleteImage = $sql->fetch(PDO::FETCH_LAZY);

  if (isset($deleteImage["image"]) && $deleteImage['image'] != "imagen.jpg") {
    $imagePath = "../admin/assets/imgEvent/" . $deleteImage["image"];
    if (file_exists($imagePath)) {
      unlink($imagePath);
    }
  }
}

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
 * @param PDO $conn recuperar la conexion a la base de datos 
 * @param int $id  identificador de la consulta
 * 
 *  @return array|null Devuelve el registro como un arreglo asociativo o NULL si no se encontró ninguna coincidencia.s
 */
function selectRegister($conn, $id, $table)
{
  $sql = $conn->prepare("SELECT * FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $event = $sql->fetch(PDO::FETCH_ASSOC);

  return $event;
}

/**
 * Verificar si existe una imagen
 *
 * @param string $imagePath ruta de la imagen
 * @return void
 */
function verifyImage($imagePath, $carpet)
{
  if (isset($imagePath["image"]) && ($imagePath['image'] != "imagen.jpg")) {
    if (file_exists("../admin/assets/$carpet/" . $imagePath["image"])) {
      unlink("../admin/assets/$carpet/" . $imagePath["image"]);
    }
  }
}

/**
 * Eliminar los registros de la base de datos
 *
 * @param PDO $conn Recuperar la conexion a Mysql
 * @param [int] $id enviar el identificador del registro
 * @param [string] $location nombre del archivo al que se actualizara la cabecera
 * @param [string] $table nombre de la tabla a la que se esta consultando
 * @return void
 */
function deleteRegister($conn, $id, $table, $carpet)
{
  $sql = $conn->prepare("SELECT image FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $image = $sql->fetch(PDO::FETCH_ASSOC);

  deleteOldImage($conn, $id, $table);
  $sql = $conn->prepare("DELETE FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
}


/**
 * Consulta del registro para mostrarlo en una tabla
 *
 * @param [PDO] $conn Recuperar la conexion a Mysql
 * @param [String] $table Nombre de la tabla a la que se desar consultar
 * @return $query devolvemos un array asosiativo  con los datos de las tabla
 */
function  getQuery($conn, $table)
{
  $query = $conn->prepare("SELECT * FROM $table");
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}
