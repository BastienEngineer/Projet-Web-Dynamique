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
<?php 
session_start();
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$nomClient=0;
$prenomClient="";
$e=0;
if (isset($_SESSION['cID'])) {
    $nom=$_SESSION['Nom'];
    $prenom=$_SESSION['Prenom'];
    $mail=$_SESSION['Mail'];
    $e=$_SESSION['cID'];
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
    header("Location:connexionC.php"); 
}
else
{
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if (isset($_POST["coach"])) {
        if ($db_found) {
        $result =mysqli_query($db_handle, "SELECT * FROM coach WHERE Nom='$_POST[nom]' AND Prenom='$_POST[prenom]' AND Mail='$_POST[courrier]' ORDER BY cID ");
        if (mysqli_num_rows($result)) {
        echo "<table border=\"1\">";
        echo "<tr>";
        echo "<th>" . "ID" . "</th>";
        echo "<th>" . "Nom" . "</th>";
        echo "<th>" . "Prenom" . "</th>";
        echo "</tr>";
        while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $data['cID'] . "</td>";
        echo "<td>" . $data['Nom'] . "</td>";
        echo "<td>" . $data['Prenom'] . "</td>";
        echo "</tr>";
        $_SESSION['cID']=$data['cID'];
        $e=$_SESSION['cID'];
        $_SESSION['Nom']=$data['Nom'];
        $_SESSION['Prenom']=$data['Prenom'];
        $_SESSION['Mail']=$data['Mail'];
        }
        echo "</table>";
        }
        else
        {
            header("Location:connexionC.php");
        }
        }
        else{
            echo "<br>Database not found";
        }
    }
    $res=mysqli_query($db_handle, "SELECT mID,Prenom FROM client");
    ?>
    <div class="container my-5 py-5">
    <div class="border border-light py-5" style="border-radius: 33px;">
    <h2 class="text-white text-center lead">Veuillez choisir avec qui vous voulez communiquer</h2>
    <div class="row justify-content-center align-items-center">
    <div class="col-lg-4 col-md-6 my-4 py-4 text-center">
    <?php 
    while ($data = mysqli_fetch_assoc($res)) {
        $d=$data['mID'];
        echo "<a class='btn btn-outline-light' href='communiquer.php?mID=$d'>" . $data['Prenom'] . "</a>";
    }
    ?>
    <a class="btn btn-outline-light btn-lg mt-5" href="deconnexion.php">Deconnexion</a>
    </div>
    </div>
    </div>
    </div>
    <div class="container my-5 py-5">
    <div class="border border-light py-5" style="border-radius: 33px;">
    <h2 class="text-white text-center lead">Consultations</h2>
    <div class="row justify-content-center align-items-center">
    <div class="col-lg-4 col-md-6 my-4 py-4 text-center">
    <?php 
    $r=mysqli_query($db_handle, "SELECT * FROM rdv WHERE c_id=$e");
    if (mysqli_num_rows($r)) {
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>" . "Jour" . "</th>";
    echo "<th>" . "Horaire" . "</th>";
    echo "<th>" . "Client" . "</th>";
    echo "</tr>";
    while ($data = mysqli_fetch_assoc($r)) {
        $nomClient=$data['clientID'];
        $r1=mysqli_query($db_handle, "SELECT Prenom FROM client WHERE mID=$nomClient");
        if (mysqli_num_rows($r)) {
        while ($data1 = mysqli_fetch_assoc($r1)) {
            $prenomClient=$data1['Prenom'];
        }
        echo "<tr>";
        echo "<td>" . $data['jour'] . "</td>";
        echo "<td>" . $data['horaire'] . "</td>";
        echo "<td>" .  $prenomClient . "</td>";
        echo "</tr>";
        }
    }
    echo "</table>";
    }
    else
    {
        echo "Aucune consultation";
    }
    //fermer la connexion
    mysqli_close($db_handle);
}
    ?>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
 


