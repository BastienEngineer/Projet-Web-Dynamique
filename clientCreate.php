<!-- Saisie du Client pour creer son compte -->
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
<div class="row h-100 justify-content-center align-items-center">
<?php 
    $spe=$_GET["spe"];
    echo "<form action='AjoutClient.php?spe=$spe' method='post'>"; 
?> 
        <table class="table">
        <tr>
            <td colspan="2" align="center">
            <h3 class="text-white font-weight-light">Creation d un client</h3>
            </td>
        </tr>        
        <tr>
            <td>Nom</td>
            <td><input type="text" class="form-control" name="nom"></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type="text" class="form-control" name="prenom"></td>
        </tr>
        <tr>
            <td>Mail</td> 
            <td><input type="email" class="form-control" name="courrier"></td> 
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type="password" class="form-control" name="mdp"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><input type="text" class="form-control" name="adresse"></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type="text" class="form-control" name="ville"></td>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td><input type="text" class="form-control" pattern="[0-9]{5}" name="code"></td>
        </tr>
        <tr>
            <td>Pays</td>
            <td><input type="text" class="form-control" name="pays"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input type="text" class="form-control" pattern="[0-9]{10}" name="tel"></td>
        </tr>
        <tr>
            <td>Carte Etudiante</td>
            <td><input type="text" class="form-control" pattern="[0-9]{6}" name="carte"></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input type="submit" class="btn btn-outline-light btn-lg" value="Creer votre compte" name="creation">
        </td>
        </tr>
        </table>
    </form>
</div>
</div>
</body>
</html>
