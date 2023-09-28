<?php

$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Agrega aqui los archivos css o de otro tipo que requieras llamar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/superglobals.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/index.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/about.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/attractive.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/lodging.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/events.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/register.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/footer.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/responsive.css" type="text/css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous" defer></script>

    <title>Visita Sultepec</title>
</head>

<body>
    <!-- Barra de navegacion traida con php -->
    <?php require "./partials/navbar.php" ?>
    <main>
