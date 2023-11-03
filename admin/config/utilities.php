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

// Creo que esta funcion no me sirve
// function roles() {
//   if (isset($_SESSION["rol"])) {
//       // Si ya hay una sesión (el usuario está logueado),
//       // redirige a una página que corresponda al rol del usuario
//       redirectToRolePage($_SESSION["rol"]);
//   }
// }

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
 * Agregar un registro a la base de datos llamando a otra funcion
 *
 * @param [type] $conn
 * @param [type] $type
 * @param [string] $title titulo de la publicacion
 * @param [string] $description descripcion de la publicacion
 * @param [string] $image descripcion de la publicacion
 * @param [datatime] $dataSend hora en que se agrego la publicacion
 * @param [string] $table nombre de la tabla de la base de datos
 * @return void
 */
function addEvent($conn, $type, $title, $description, $image, $dataSend, $table, $carpet)
{
  insertEvent($conn, $type, $title, $description, $image, $dataSend, $table, $carpet);
}

function insertEvent($conn, $type, $title, $description, $image, $dataSend, $table, $carpet)
{
  $sql = $conn->prepare("INSERT INTO $table (type, title, description, date, image) VALUES (:type, :title, :description, :date, :image);");
  $sql->bindParam(':type', $type);
  $sql->bindParam(':title', $title);
  $sql->bindParam(':description', $description);
  $sql->bindParam(':date', $dataSend);
  $nameFile = loadImage($image, $carpet);
  $sql->bindParam(':image', $nameFile);
  $sql->execute();
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
 * @param [string] $image ruta de la imagen en memoria
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
 * @param [conection] $conn recuperar la conexion a la base de datos 
 * @param [int] $id  identificador de la consulta
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
 * @param [string] $imagePath ruta de la imagen
 * @return void
 */
function verifyImage($imagePath)
{

  if (isset($imagePath["image"]) && ($imagePath['image'] != "imagen.jpg")) {
    if (file_exists("../admin/assets/imgEvent/" . $imagePath["image"])) {
      unlink("../admin/assets/imgEvent/" . $imagePath["image"]);
    }
  }
}

/**
 * Eliminar los registros de la base de datos
 *
 * @param [PDO] $conn Recuperar la conexion a Mysql
 * @param [int] $id enviar el identificador del registro
 * @param [string] $location nombre del archivo al que se actualizara la cabecera
 * @param [string] $table nombre de la tabla a la que se esta consultando
 * @return void
 */
function deleteRegister($conn, $id, $location, $table)
{
  $sql = $conn->prepare("SELECT image FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $image = $sql->fetch(PDO::FETCH_ASSOC);

  if ($image) {
    verifyImage("../admin/assets/imgEvent/" . $image["image"]);
  }

  $sql = $conn->prepare("DELETE FROM $table WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  header("Location:$location");
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
