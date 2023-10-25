<?php
$location = "http://".$_SERVER['HTTP_HOST']."/WebSite-Turismo";
session_start();
session_destroy();
header("Location: $location");
?>
