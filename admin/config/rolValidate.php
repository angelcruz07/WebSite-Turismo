<?php
function validateRol(){
  session_start();
if (!isset($_SESSION["rol"])) {
  header("Location: login.php");
} else {
  if ($_SESSION['rol'] != 1) {
    header('location: login.php');
  }
}
}
?>
