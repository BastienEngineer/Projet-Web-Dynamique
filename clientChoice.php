<?php
$choice = isset($_POST["login"])? $_POST["login"] : "";

switch ($choice) {
case "Se connecter":
    include('clientLogin.php');
    break;
case "Creer un compte":
    include('clientCreate.php');
    break;
default:
    break;
}
?>