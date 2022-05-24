<?php

if(isset($_POST['valide']))
{
    $to      = 'shihao@outlook.fr';
    $subject = 'Paiement réussir';
    $message = 'votre paiement est réussir';
    $headers = 'From: omnessports@gmail.com' . "\r\n" .

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>