<?php
session_start();
$database = "omnes";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$e=$_SESSION['mID'];
$rdv=$_GET['rID'];
if ($db_found) {
    $delete="DELETE FROM rdv WHERE rID=$rdv";
    $r=mysqli_query($db_handle,$delete);
    $deleteMail="DELETE FROM mail WHERE eID=$rdv";
    $r2=mysqli_query($db_handle,$deleteMail);
    header("Location:client1.php");
}
else
{
    echo "<br>Database not found";
}  
//fermer la connexion
mysqli_close($db_handle); 
?>


