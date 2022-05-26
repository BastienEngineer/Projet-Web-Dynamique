<?php 
session_start();
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$mdp = isset($_POST["motdepasse"])? $_POST["motdepasse"] : "";
$erreur = "";
$spe=$_GET["spe"];
$e=$_SESSION['mID'];
$d="";

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
    header("Location:clientLogin.php?spe=$spe"); 
}
else
{
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    $res=mysqli_query($db_handle, "SELECT cID,Prenom FROM coach WHERE Specialite='$_GET[spe]'");
    while ($data = mysqli_fetch_assoc($res)) {
        $d=$data['cID'];
    }
    if (isset($_POST["client"])) {
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
        }
        else
        {
            header("Location:clientLogin.php?spe=$spe");
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
        <h2 class="text-white text-center lead">Cher client, veuillez choisir parmi vos options</h2>
        <div class="row justify-content-center align-items-center">
            <div class="col my-4 py-4 text-center">
                <?php echo "<a class='btn btn-outline-light btn-lg' href='rdv.php?mID=$e&spe=$spe'>Prendre RDV</a>"; ?>
                <?php echo "<a class='btn btn-outline-light btn-lg' href='communiquer2.php?cID=$d&spe=$spe'>Message</a>"; ?>
                <?php echo "<a class='btn btn-outline-light btn-lg' href='boiteMail.php?spe=$spe'>Mail</a>"; ?>
                <a class="btn btn-outline-light btn-lg" href="deconnexion.php">Deconnexion</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>