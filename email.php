<?php
session_start();
$nom = $_POST['nom'];
$getemail="SELECT Mail FROM client WHERE Nom='$nom'";
if(isset($_POST['valide']))
{
    $to = $getemail;
    $subject = 'Paiement réussit';
    $message = 'votre paiement est réussit';
    $headers = 'From: omnessports@gmail.com';
    
    if (mail ($to, $subject, $body, $from)) {
            echo '<p>votre email a envoyé </p>';
        } else {
            echo '<p>votre email n a pas encore envoyé </p>';
        }
}

?>