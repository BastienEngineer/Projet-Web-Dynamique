<?php 
session_start();
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$mdp = isset($_POST["motdepasse"])? $_POST["motdepasse"] : "";
$erreur = "";
$verif=0;
$d=$_SESSION['cID'];
echo $d;

if (isset($_SESSION['mID'])) {
    $mail=$_SESSION['Mail'];
    $mdp=$_SESSION['MotdePasse'];
} 

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
        $_SESSION['Mail']=$data['Mail'];
        $_SESSION['MotdePasse']=$data['MotdePasse'];
        }
        echo "</table>";
        $res=mysqli_query($db_handle, "SELECT cID FROM coach WHERE cID=$d");
       /* if((mysqli_num_rows($res))
        {
            $verif=$_SESSION['cID'];
        }
        else
        {
            echo 'erreur';
        }*/
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
    <?php echo "<a href='communiquer2.php?cID=$d'>Messages</a>" ?>
    <a href="boiteMail.php">Mail</a>
    <a href="deconnexion.php">Deconnexion</a>
</body>
</html>