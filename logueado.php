<?php

require "database.php";

session_start();

if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  return;
}

$contacts = $conn->query("SELECT * FROM users WHERE id = {$_SESSION['user']['id']}");

?>
<h1>Usuario Logueado</h1>
