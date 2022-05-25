<?php
$choice = isset($_POST["connexion"])? $_POST["connexion"] : "";

switch ($choice) {
case "Admin":
    header('Location:connexionA.php');
    break;
case "Coach":
    header('Location:connexionC.php');
    break;
case "Client":
    header('Location:connexionB.php');
    break;
default:
    header('Location:connexion.php');
    break;
}
?>