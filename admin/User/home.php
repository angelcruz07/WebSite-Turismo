<?php
require_once "../config/database.php";
require_once "../config/utilities.php";
$rol = 2;
validateRol($rol);
require_once "../partials/headerUser.php";
require_once "../partials/navbarUser.php"; 

$conn

?>
<h1>Usuario normal</h1>
 
<!--Formulario de USER--> 
<section id="add-form" class="add-form">
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Datos del negocio</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de negocio</label>
          <select name="type" id="type"> 
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
          <input type="text" value="" name="title" id="title" maxlength="22" required>
        </div>
        <div class=" form-group">
          <label for="image">Imagen del negocio:</label><br>
          <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $image ?>" title="Imagen seleccionada"
            width="50px">
          <input type="file" name="image" id="image">
        </div>   
        <div class="form-group">
          <label for="description"> Agrega una Descripción del negocio:</label>
          <textarea name="description" id="description" maxlength="300" class="textarea" rows="4" cols="30"
            required></textarea>
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de producto</label>
          <select name="type" id="type"> 
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
          <label for="image">Imagen del producto:</label><br>
          <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $image ?>" title="Imagen seleccionada"
            width="50px">
          <input type="file" name="image" id="image">
        </div>   
         
      <h2 class="title-form">Datos del propietario</h2> 
      <div class="form-group">
          <label for="title"> Nombre completo:</label>
          <input type="text" value="" name="title" id="title" maxlength="22" required>
        </div> 
        <div class="form-group">
          <label for="title"> Direccion:</label>
          <input type="text" value="" name="title" id="title" maxlength="22" required>
        </div> 
        <div class="form-group">
          <label for="title"> Numero de telefono:</label>
          <input type="text" value="" name="title" id="title" maxlength="22" required>
        </div>

         
        <!--Botones -->
        <div class="group-buttons">
          <button type="submit"  value="Agregar" name="accion" class="form-btn primary">Enviar</button>
          <button type="submit" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div> 
</section>
