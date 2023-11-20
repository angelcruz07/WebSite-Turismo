<?php
require_once "../config/database.php";
require_once "../config/utilities.php";
$rol = 2;
validateRol($rol);
require_once "../partials/headerUser.php";
require_once "../partials/navbarUser.php";
$conn;

function clean($data)
{
  return htmlspecialchars(stripslashes(trim($data)));
}

function processImage($imageField)
{
  global $uploadDirectory;

  $uploadDirectory = __DIR__ . "/../assets/imgUser/";

  if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] === UPLOAD_ERR_OK) {
    $fileName = $uploadDirectory . basename($_FILES[$imageField]['name']);

    if (move_uploaded_file($_FILES[$imageField]['tmp_name'], $fileName)) {
      // echo "Archivo movido correctamente a $fileName";
      return basename($_FILES[$imageField]['name']);
    } else {
      echo "Error al subir la imagen de $imageField. Código de error: " . $_FILES[$imageField]['error'];
      echo "Ruta del archivo de destino: $fileName";
    }
  } else {
    echo "El campo de imagen $imageField está vacío o tiene un error. Código de error: " . $_FILES[$imageField]['error'];
  }

  return false;
}

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $requiredFields = ['business_type', 'name_business', 'description', 'product_type', 'name', 'address', 'phone', 'business_image', 'product_image'];

  foreach ($requiredFields as $field) {
    if (empty($_POST[$field]) && (empty($_FILES[$field]['name']) || $_FILES[$field]['error'] !== UPLOAD_ERR_OK)) {
      $errorMessage = "Todos los campos son obligatorios.";
      break;
    }
  }

  if (empty($errorMessage)) {
    $business_type = clean($_POST['business_type']);
    $name_business = clean($_POST['name_business']);
    $description = clean($_POST['description']);
    $product_type = clean($_POST['product_type']);
    $name = clean($_POST['name']);
    $address = clean($_POST['address']);
    $phone = clean($_POST['phone']);

    $businessImage = processImage('business_image');
    $productImage = processImage('product_image');

    try {
      $stmt = $conn->prepare("INSERT INTO request (business_type, business, description, product_type, name, address, phone_number, business_image, product_image, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'en revision')");
      $stmt->bindParam(1, $business_type);
      $stmt->bindParam(2, $name_business);
      $stmt->bindParam(3, $description);
      $stmt->bindParam(4, $product_type);
      $stmt->bindParam(5, $name);
      $stmt->bindParam(6, $address);
      $stmt->bindParam(7, $phone);
      $stmt->bindParam(8, $businessImage);
      $stmt->bindParam(9, $productImage);

      if ($stmt->execute()) {
        header('Location: request.php');
      } else {
        throw new Exception("Error al insertar datos: " . $stmt->errorInfo()[2]);
      }
    } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
?>
<h1 class="title-index">Solicita ingresar tu negocio a nuestra web</h1>
<p class="parraf-user">La solicitud sera enviada al H.Ayuntamiento para procesar tu solicitud, seras contactado si tu
  solicitud ha sido aprobada</p>

<!--Formulario de USER-->
<section id="add-form" class="add-form">
  <div class="container-form-user">
    <div class="container-form-form user">
      <h2 class="title-form">Datos del negocio</h2>
      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <label for="Type">Selecciona el tipo de negocio</label>
          <select name="business_type" id="business_type" required>
            <option value=""></option>
            <option value="Hotel">Hotel</option>
            <option value="Restaurante">Restaurante</option>
            <option value="Fonda">Fonda</option>
            <option value="Bar">Bar</option>
            <option value="Local">Local</option>
            <option value="Tienda">Tienda</option>
          </select>
        </div>
        <div class="form-group">
          <label for="title"> Nombre del negocio:</label>
          <input type="text" value="" name="name_business" id="name_business" maxlength="50" required>
        </div>
        <div class=" form-group">
          <label for="image">Imagen del negocio:</label><br>
          <input type="file" name="business_image" id="business_image">
        </div>
        <div class="form-group">
          <label for="description"> Agrega una Descripción del negocio:</label>
          <textarea name="description" id="description" maxlength="255" class="textarea" rows="4" cols="30" required></textarea>
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de producto</label>
          <select name="product_type" id="product_type" required>
            <option value=""></option>
            <option value="Servicio(hotel)">Sevicio(hotel)</option>
            <option value="Comida_mexicana">Comida Mexicana</option>
            <option value="Comida_rapida">Comida Rapida</option>
            <option value="Comida_oriental">Comida Oriental</option>
            <option value="Comida_tradicional">Comida Tradicional</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Reposteria">Reposteria</option>
          </select>
        </div>
        <div class=" form-group">
          <label for="product_image">Imagen del producto:</label><br>
          <input type="file" name="product_image" id="product_image" required>
        </div>
        <h2 class="title-form">Datos del propietario</h2>
        <div class="form-group">
          <label for="title"> Nombre completo:</label>
          <input type="text" value="" name="name" id="name" maxlength="50" required>
        </div>
        <div class="form-group">
          <label for="title"> Direccion:</label>
          <input type="text" value="" name="address" id="address" required>
        </div>
        <div class="form-group">
          <label for="title"> Numero de telefono:</label>
          <input type="text" value="" name="phone" id="phone" maxlength="14" required>
        </div>
        <!-- Mensaje de error -->
        <?php if (!empty($errorMessage)) : ?>
          <div style="color: #FF0000; font-weight: bold; margin-bottom: 10px; text-align:center;">
            <?php echo $errorMessage; ?>
          </div>
        <?php endif; ?>
        <!--Botones -->
        <div class="group-buttons">
          <button type="submit" value="Agregar" name="accion" class="form-btn primary alert">Enviar</button>
          <button type="reset" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>
</section>
<?php require_once "../partials/footerUser.php" ?>
