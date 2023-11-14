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

    if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] == 0) {
        $fileName = $uploadDirectory . basename($_FILES[$imageField]['name']);

        if (move_uploaded_file($_FILES[$imageField]['tmp_name'], $fileName)) {
            return basename($_FILES[$imageField]['name']);
        } else {
            return "Error al subir la imagen de $imageField.";
        }
    } else {
        return "El campo de imagen $imageField está vacío.";
    }

    return false;
}

function showAlert($message)
{
    echo "<script>alert('$message');</script>";
}

$alertMessages = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación de campos obligatorios
    $requiredFields = [
        'business_type' => 'Tipo de negocio',
        'name_business' => 'Nombre del negocio',
        'description' => 'Descripción del negocio',
        'product_type' => 'Tipo de producto',
        'name' => 'Nombre completo',
        'address' => 'Dirección',
        'phone' => 'Número de teléfono',
        'business_image' => 'Imagen del negocio',
        'product_image' => 'Imagen del producto',
    ];

    foreach ($requiredFields as $field => $fieldName) {
        if (empty($_POST[$field])) {
            $alertMessages[] = "Por favor, selecciona $fieldName.";
        }
    }

    // Validación de campos numericos
    if (!is_numeric($_POST['phone'])) {
        $alertMessages[] = "El número de teléfono debe ser numérico.";
    }

    // Resto de tu código de procesamiento
    // ...

    $business_type = clean($_POST['business_type']);
    $name_business = clean($_POST['name_business']);
    $description = clean($_POST['description']);
    $product_type = clean($_POST['product_type']);
    $name = clean($_POST['name']);
    $address = clean($_POST['address']);
    $phone = clean($_POST['phone']);

    $uploadDirectory = __DIR__ . "/../assets/imgUser/";

    $businessImage = processImage('business_image');
    $productImage = processImage('product_image');

    if ($businessImage !== false && $productImage !== false && empty($alertMessages)) {
        try {
            $stmt = $conn->prepare("INSERT INTO request (business_type, business, description, product_type, name, address, phone_number, business_image, product_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

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
                $alertMessages[] = "Datos insertados correctamente";
            } else {
                throw new Exception("Error al insertar datos: " . $stmt->errorInfo()[2]);
            }
        } catch (Exception $e) {
            $alertMessages[] = "Error: " . $e->getMessage();
        }
    }

    // Mostrar alerta con mensajes de error (si los hay)
    if (!empty($alertMessages)) {
        showAlert(implode("\n", $alertMessages));
    }
}

?>  
 
<!-- Mostrar alerta si no todos los campos están llenos -->
<script>
    <?php if (!empty($alertMessages)): ?>
        alert('Es obligatorio que todos los campos estén llenos\n<?php echo implode('\n', $alertMessages); ?>');
    <?php endif; ?>
</script>

 
 


<h1>Usuario normal</h1>
<!--Formulario de USER-->
<section id="add-form" class="add-form">
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Datos del negocio</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden">
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de negocio</label>
          <select name="business_type" id="business_type">
            <option value=""></option>
            <option value="Restaurante">Restaurante</option>
            <option value="Fonda">Fonda</option>
            <option value="Bar">Bar</option>
            <option value="Local">Local</option>
            <option value="Tienda">Tienda</option>
          </select>
        </div>
        <div class="form-group">
          <label for="title"> Nombre del negocio:</label>
          <input type="text" value="" name="name_business" id="name_business" maxlength="22" required>
        </div>
        <div class=" form-group">
          <label for="image">Imagen del negocio:</label><br>
          <input type="file" name="business_image" id="business_image">
        </div>
        <div class="form-group">
          <label for="description"> Agrega una Descripción del negocio:</label>
          <textarea name="description" id="description" maxlength="300" class="textarea" rows="4" cols="30"
            required></textarea>
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de producto</label>
          <select name="product_type" id="product_type">
            <option value=""></option>
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
          <input type="file" name="product_image" id="product_image">
        </div>

        <h2 class="title-form">Datos del propietario</h2>
        <div class="form-group">
          <label for="title"> Nombre completo:</label>
          <input type="text" value="" name="name" id="name" maxlength="22" required>
        </div>
        <div class="form-group">
          <label for="title"> Direccion:</label>
          <input type="text" value="" name="address" id="address" required>
        </div>
        <div class="form-group">
          <label for="title"> Numero de telefono:</label>
          <input type="text" value="" name="phone" id="phone" maxlength="22" required>
        </div>


        <!--Botones -->
        <div class="group-buttons">
          <button type="submit" value="Agregar" name="accion" class="form-btn primary">Enviar</button>
          <button type="reset" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>
</section>
