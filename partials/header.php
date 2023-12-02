<?php $title = "Turismo en Sultepec - Descubre el Encanto Único" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Descubre el encanto de Sultepec, un destino turístico único. Planifica tu visita a Sultepec con información detallada sobre eventos, lugares turísticos, gastronomía, historia y servicios locales.">
  <meta name="keywords" content="turismo Sultepec,turismo en méxico, mexico, pueblos con encanto, estado de mexico , municipios, eventos, lugares turísticos, gastronomía, historia, hospedajes, servicios locales, restaurantes, turismo cultural">
  <meta name="author" content="H. Ayuntamiendo de Sultepec">
  <meta name="language" content="es">
  <link rel="icon" href="../assets/img/logo.ico" type="image/x-icon">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Cambiar ya desplegado  -->
  <!-- <link rel="canonical" href="http://localhost/WebSite-Turismo/"> -->
  <title><?php echo $title ?> </title>
  <?php
  $current_page = $_SERVER['PHP_SELF'];
  // Verifica si el archivo actual es el index.php
  if (basename($current_page) === 'index.php') {
    $folder = './';
  } else {
    $folder = '../';
  }
  ?>
  <link rel="stylesheet" href="<?= $folder ?>assets/css/superglobals.css">
  <link rel="stylesheet" href="<?= $folder ?>assets/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="<?= $folder ?>assets/css/superglobals.css">
  <link rel="stylesheet" href="<?= $folder ?>assets/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="<?= $folder ?>assets/css/navbar.css" type="text/css">
  <link rel="stylesheet" href="<?= $folder ?>assets/css/front-page.css" type="text/css">
  <link rel="stylesheet" href="<?= $folder ?>assets/css/footer.css" type="text/css">
