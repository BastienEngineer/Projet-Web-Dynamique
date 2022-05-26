<?php 
session_start();
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";

if (isset($_SESSION['aID'])) {
    $nom=$_SESSION['Nom'];
    $prenom=$_SESSION['Prenom'];
    $mail=$_SESSION['Mail'];
} 

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
else
{
    if (isset($_POST["admin"])) {
        $database = "omnes";
        //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        if ($db_found) {
        $result =mysqli_query($db_handle, "SELECT * FROM admin WHERE Nom='$_POST[nom]' AND Prenom='$_POST[prenom]' AND Mail='$_POST[courrier]' ORDER BY aID ");
        if (mysqli_num_rows($result)) {
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
        $_SESSION['Nom']=$data['Nom'];
        $_SESSION['Prenom']=$data['Prenom'];
        $_SESSION['Mail']=$data['Mail'];
        }
        echo "</table>";
        }
        else
        {
            header("Location:connexionA.php");
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

<!DOCTYPE html>
<html>
<head>
    <title>Projet Piscine</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>
<div class="container my-5 py-5">
    <div class="border border-light py-5" style="border-radius: 33px;">
        <div class="row justify-content-center align-items-center">
            <div class="col my-4 py-4 text-center">
                <a class="btn btn-outline-light btn-lg" href="choixAddCoach.php">Ajouter/Supprimer un coach</a>
                <a class="btn btn-outline-light btn-lg" href="choixCV.php">Creation d un CV</a>
                <a class="btn btn-outline-light btn-lg" href="deconnexion.php">Deconnexion</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
