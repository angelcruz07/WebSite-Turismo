<?php
require "./config/database.php";
session_start();
if (!isset($_SESSION["rol"])) {
  header("Location: login.php");
} else {
  if ($_SESSION['rol'] != 1) {
    header('location: login.php');
  }
}
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>

<?php
require "partials/header.php";
require "./partials/navbar.php"
?>
<main>

</main>
<?php require "./partials/footer.php" ?>
