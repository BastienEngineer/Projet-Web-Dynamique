<?php 
session_start();
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$mdp = isset($_POST["motdepasse"])? $_POST["motdepasse"] : "";
$erreur = "";
if ($mail == "") {
    $erreur .= "Le champ courrier est vide. <br>";
}
if ($mdp == "") {
    $erreur .= "Le champ mdp est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location:clientLogin.php"); 
}
else
{
    if (isset($_POST["client"])) {
        $database = "omnes";
        //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        if ($db_found) {
        $result =mysqli_query($db_handle, "SELECT * FROM client WHERE Mail='$_POST[courrier]' AND MotdePasse='$_POST[motdepasse]'");
        if (mysqli_num_rows($result)) {
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<th>" . "ID" . "</th>";
        echo "<th>" . "Mail" . "</th>";
        echo "<th>" . "Mdp" . "</th>";
        echo "</tr>";
        while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $data['mID'] . "</td>";
        echo "<td>" . $data['Mail'] . "</td>";
        echo "<td>" . $data['MotdePasse'] . "</td>";
        echo "</tr>";
        $_SESSION['mID']=$data['mID'];
        $e=$_SESSION['mID'];
        }
        echo "</table>";
        $res=mysqli_query($db_handle, "SELECT cID,Prenom FROM coach");
        while ($data = mysqli_fetch_assoc($res)) {
            $d=$data['cID'];
            echo "<a href='communiquer2.php?cID=$d'><br>" . $data['Prenom'] . "</br>";
        }
        }
        else
        {
            header("Location:clientLogin.php");
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
    <a href="deconnexion.php">Deconnexion</a>
</body>
</html>