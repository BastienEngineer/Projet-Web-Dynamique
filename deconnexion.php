<!-- Deconnexion -->
<?php
session_start();
session_destroy();
// revient a l accueil
header('Location:index.html');
?>