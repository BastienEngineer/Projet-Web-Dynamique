<?php 
session_start();
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$d=$_SESSION['aID'];
$erreur = "";
if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($prenom == "") {
    $erreur .= "Le champ prenom est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    if (!isset($_SESSION['aID'])) {
        header("Location: admin.php");
    }
}
else
{
if (isset($_POST["add"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $sql="INSERT INTO coach(Titre, Auteur, Annee, Editeur, Couverture)
    VALUES('$titre', '$auteur', '$annee', '$editeur', '$photo')";
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
    $sql="DELETE coach(Titre, Auteur, Annee, Editeur, Couverture)
    VALUES('$titre', '$auteur', '$annee', '$editeur', '$photo')";
    $result =mysqli_query($db_handle, $sql);
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
}
}
?>