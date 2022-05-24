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
        $e=$data['aID'];
        $_SESSION['aID']=$e;
        $d=$_SESSION['aID'];
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="adminTraitement.php" method="post">
        <label for="text">Nom : </label>  
        <input type="text" name="nom"/><br/>
        <label for="text">Prenom : </label>  
        <input type="text" name="prenom"/><br/>  
        <input type="submit" value="Ajouter un coach" name="add">  
        <input type="submit" value="Supprimer un coach" name="delete"> 
    </form>
    <a href="deconnexion.php">Deconnexion</a>
</body>
</html>
 


