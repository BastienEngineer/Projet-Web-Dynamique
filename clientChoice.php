<?php
$choice = isset($_POST["login"])? $_POST["login"] : "";

switch ($choice) {
case "Se connecter":
    header('Location:clientLogin.php');
    break;
case "Creer un compte":
    header('Location:clientCreate.php');
    break;
default:
    break;
}
?>