<?php
function redirectToRolePage($rol) {
  switch ($rol) {
      case 1:
          header('Location: admin.php');
          exit();
      case 2:
          header('Location: home.php');
          exit();
      default:
          // Manejar otros roles si es necesario
  }
}
function roles() {
  if (isset($_SESSION["rol"])) {
      // Si ya hay una sesión (el usuario está logueado),
      // redirige a una página que corresponda al rol del usuario
      redirectToRolePage($_SESSION["rol"]);
  }
}
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
