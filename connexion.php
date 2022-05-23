<?php
$choice = isset($_POST["connexion"])? $_POST["connexion"] : "";

switch ($choice) {
case "Admin":
    include('connexionA.php');
    break;
case "Coach":
    include('connexionA.php');
    break;
case "Client":
    include('connexionB.php');
    break;
default:
    break;
}
?>