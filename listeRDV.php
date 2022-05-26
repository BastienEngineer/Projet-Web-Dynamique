<?php
session_start();
$database = "omnes";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$e=$_SESSION['mID'];
$spe=$_GET['spe'];
$rdv="";
$jour="";
$horaire="";
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
<div class="container d-flex justify-content-center">
<div class="card mt-5" style="width:50%;">
    <div class="card-header text-center">
    <h4>Voici votre liste de RDV </h4>
    <h4>Cliquez sur votre RDV pour annuler</h4>
    </div>
    <div class="card-body">
    <?php 
        if ($db_found) {
            $getID="SELECT * FROM rdv WHERE clientID=$e";
            $r=mysqli_query($db_handle,$getID);
            if (mysqli_num_rows($r)) 
            {
                while ($data = mysqli_fetch_assoc($r)) {
                    $rdv=$data['rID'];
                    $jour=$data['jour'];
                    $horaire=$data['horaire'];
                    echo "<a class='btn btn-outline-light' href='annulerRDV.php?spe=$spe&rID=$rdv'>" .$jour. " " .$horaire. "</a>";
                }
            }
            else
            {
                $rdv="Aucun RDV";
                echo $rdv;
            }
            
        }
        else
        {
            echo "<br>Database not found";
        }  
        //fermer la connexion
        mysqli_close($db_handle);
    ?>
    <div class="col mt-5 pt-5 text-center">
    <?php echo "<a class='btn btn-outline-dark' href='client.php?spe=$spe'>Retour</a>"; ?>
    </div>
    </div>
</div>
</div>
</body>
</html>
