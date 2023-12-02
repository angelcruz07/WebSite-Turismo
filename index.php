<?php
require_once "partials/header.php";
?>
<link rel="stylesheet" href="./assets/css/navbar.css" type="text/css">
<link rel="stylesheet" href="./assets/css/slider.css" type="text/css">
<link rel="stylesheet" href="./assets/css/about.css" type="text/css">
<link rel="stylesheet" href="./assets/css/suggestions.css" type="text/css">
<link rel="stylesheet" href="./assets/css/location.css" type="text/css">
</head>

<body id="scroll-top">

  <?php
  // Navbar
  require_once "./partials/navbar.php";
  // Slider index
  require_once "./public/slider.php";
  //Funtion scroll top
  require_once "./partials/scroll-top.php";
  //Suggestions
  require_once "./public/suggestions.php";
  //About
  require_once "./public/about.php";
  //footer
  require_once "./partials/footer.php";
  ?>
