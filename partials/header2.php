<?php
$carpet = "/WebSite-Turismo";
$url = "http://" . $_SERVER['HTTP_HOST'] . $carpet;
$title = "Sultepec Turistico"
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="El H.Ayuntamiento constitucional de sultepec busca promover el turismo y la economia del municipio. Te invitamos a conocer mas sobre este hermoso lugar ubicado al sur del estado de mexico.">
  <meta name="author" content="Angel Cruz, Lizandro Antonio, Tony Villagran, Yuliana Betancourt">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?> </title>
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/superglobals.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/navbar.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/front-page.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/footer.css" type="text/css">
