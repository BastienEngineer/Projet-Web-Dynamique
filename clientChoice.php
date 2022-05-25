<?php
$choice = isset($_POST["login"])? $_POST["login"] : "";
$spe=$_GET["spe"];
switch ($choice) {
case "Se connecter":
    header("Location:clientLogin.php?spe=$spe");
    break;
case "Creer un compte":
    header("Location:clientCreate.php?spe=$spe");
    break;
default:
    break;
}
?>
