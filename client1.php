<?php 
session_start();
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$mdp = isset($_POST["motdepasse"])? $_POST["motdepasse"] : "";
$erreur = "";
$e=0;

// garder la session du client connecte 
if (isset($_SESSION['mID'])) {
    $e=$_SESSION['mID'];
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
    header("Location:clientLogin1.php"); // en cas d erreur 
}
else
{
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    // pour que le client soit connecte
    if (isset($_POST["client"])) {
        if ($db_found) {
        $result =mysqli_query($db_handle, "SELECT * FROM client WHERE Mail='$_POST[courrier]' AND MotdePasse='$_POST[motdepasse]'");
        if (mysqli_num_rows($result)) {
        while ($data = mysqli_fetch_assoc($result)) {
        $_SESSION['mID']=$data['mID'];
        $e=$_SESSION['mID'];
        $_SESSION['Mail']=$data['Mail'];
        $_SESSION['MotdePasse']=$data['MotdePasse'];
        }
        }
        else
        {
            header("Location:clientLogin1.php");
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

<!-- Choix du Client dans la page RDV du navigation -->
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
                <?php echo "<a class='btn btn-outline-light btn-lg' href='listeRDV.php'>Liste RDV</a>"; ?>
                <?php echo "<a class='btn btn-outline-light btn-lg' href='boiteMail.php'>Mail</a>"; ?>
                <a class="btn btn-outline-light btn-lg" href="deconnexion.php">Deconnexion</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>