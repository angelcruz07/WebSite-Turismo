<?php

require "database.php";

session_start();

if (!isset($_SESSION["rol"])) {
  header("Location: login.php");
}else{ 
  if($_SESSION['rol'] != 0){ 
    header('location: login.php');
  }
}

?>
<h1>Usuario Logueado</h1>
