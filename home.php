<?php

require "database.php";

session_start();

if (!isset($_SESSION["rol"])) {
  header("Location: login.php");
}else{ 
  if($_SESSION['rol'] != 2){ 
    header('location: login.php');
  }
}

?>
<h1>Usuario normal</h1>
<a class="nav-link" href="logout.php">Logout</a>
