<?php 
 $url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/superglobals.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/navbar.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/footer.css" type="text/css">
  <title>Visita sultepec</title>
</head>
<body>
  <?php 
  require "../partials/navbar.php"
  ?>
  