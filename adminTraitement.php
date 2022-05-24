<?php 
session_start();
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$file = isset($_POST["file"])? $_POST["file"] : "";
$spe = isset($_POST["spe"])? $_POST["spe"] : "";
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$salle = isset($_POST["salle"])? $_POST["salle"] : "";

$erreur = "";
if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($prenom == "") {
    $erreur .= "Le champ prenom est vide. <br>";
}
if ($file == "") {
    $erreur .= "Le champ file est vide. <br>";
}
if ($spe == "") {
    $erreur .= "Le champ spe est vide. <br>";
}
if ($mail == "") {
    $erreur .= "Le champ mail est vide. <br>";
}
if ($salle == "") {
    $erreur .= "Le champ salle est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location: admin.php");
}
else
{
if (isset($_POST["add"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $i=0;
    $sql="INSERT INTO coach(cID,Nom,Prenom,Photo,Specialite,Mail,Bureau)
    VALUES($i,'$nom', '$prenom', '$file', '$spe', '$mail', '$salle')";
    $result =mysqli_query($db_handle, $sql);
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
} 
if (isset($_POST["delete"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $getID="SELECT cID FROM coach WHERE (Nom='$_POST[nom]' AND Prenom='$_POST[prenom]' AND Photo='$_POST[file]' AND Specialite='$_POST[spe]' AND Mail='$_POST[courrier]' AND Bureau='$_POST[salle]')";
    $r=mysqli_query($db_handle, $getID);
    if (mysqli_num_rows($r)) {
    while ($data = mysqli_fetch_assoc($r)) {
        $e=$data['cID'];
    }
    $sql="DELETE FROM coach WHERE cID=$e";
    $result=mysqli_query($db_handle, $sql);
    }
    else
    {
        header("Location: admin.php");
    }
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
}
}
?>