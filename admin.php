<?php 
session_start();
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";

$erreur = "";
if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($prenom == "") {
    $erreur .= "Le champ prenom est vide. <br>";
}
if ($mail == "") {
    $erreur .= "Le champ courrier est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location:connexionA.php"); 
}
if (isset($_POST["admin"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $result =mysqli_query($db_handle, "SELECT * FROM admin WHERE Nom='$_POST[nom]' AND Prenom='$_POST[prenom]' AND Mail='$_POST[courrier]'");
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>" . "ID" . "</th>";
    echo "<th>" . "Nom" . "</th>";
    echo "<th>" . "Prenom" . "</th>";
    echo "</tr>";
    while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $data['aID'] . "</td>";
    echo "<td>" . $data['Nom'] . "</td>";
    echo "<td>" . $data['Prenom'] . "</td>";
    echo "</tr>";
    $_SESSION['aID']=$data['aID'];
    $e=$_SESSION['aID'];
    }
    echo "</table>";
    $res=mysqli_query($db_handle, "SELECT mID,Prenom FROM client");
    while ($data = mysqli_fetch_assoc($res)) {
        $d=$data['mID'];
        echo "<a href='communiquer.php?mID=$d'><br>" . $data['Prenom'] . "</br>";
    }
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
}  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="deconnexion.php">Deconnexion</a>
</body>
</html>
 


