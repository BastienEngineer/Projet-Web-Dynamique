<?php


if(isset($_POST['valide']))
{
    $to = 'huaitaoy@gmail.com';
    $subject = 'Paiement réussit';
    $message = 'votre paiement est réussit';
    $headers = 'From: omnessports@gmail.com';
    
    mail($to,$subject,$message,$headers);

    echo 'Email Sent.';
}

?>