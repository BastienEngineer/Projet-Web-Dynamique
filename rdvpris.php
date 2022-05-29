<!-- Page apres avoir pris le RDV pour verifier le RDV -->
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

<div class="container">
    <div class="my-5 py-5 text-white text-center">
        <h2 class="fw-light">Rendez-vous</h2>
        <p class="pt-5 lead">
            Nos coachs à votre disposition pour prendre un rendez-vous. Veuillez choisir un rendez-vous pour
            une activités sportives, des sports de compétition ou pour les salles de sport Omnes.
        </p>
    </div>
</div>

<div class="container text-center my-5 py-5">

<?php 
    $spe=$_GET['spe'];
    $mID=$_GET['mID'];
    $ligne = isset($_POST["ligne"])? $_POST["ligne"] : "";
    $colonne = isset($_POST["colonne"])? $_POST["colonne"] : "";
    $jour = isset($_POST["jour"])? $_POST["jour"] : "";
    $horaire = isset($_POST["horaire"])? $_POST["horaire"] : "";
    $c_id = isset($_POST["c_id"])? $_POST["c_id"] : "";
    $rID=0;
    $database = "omnes";
    $db_handle = mysqli_connect('localhost', 'root', '' );
    $db_found = mysqli_select_db($db_handle, $database);
    $erreur = "";
    if ($ligne == "") {
        $erreur .= "<p class='lead'>Veuillez appuyer sur un bouton !!!<br></p>"; // en cas ou le client n a pas pris de rdv
    }
    if ($erreur == "") {
        if ($db_found)
        {
            // on trouve le rdv en cas ou si c est deja pris
            $sql = 'SELECT * FROM `rdv` WHERE `clientID` = ' . $mID . ' and `spe` = ' . $spe . ' and `ligne` = ' . $ligne . ' and `colonne` = ' . $colonne;
            $result = mysqli_query($db_handle, $sql);
            if (mysqli_num_rows($result) != 0)
            {
	            echo "<p class='lead'>Deja reservé.<br></p>"; // affiche un message
                echo "<a class='btn btn-outline-dark btn-lg my-5' href='rdv.php?mID=$mID&spe=$spe'>Retour</a>";
            }
            else
            {
                $i=0;
                // sinon on cree le RDV puis on l insere dans la BDD
                $sql = 'INSERT INTO `rdv` VALUES ("' . $i . '", "' . $c_id . '", "' . $mID . '", "' . $jour . '", "' . $horaire . '","' . $spe . '" ,"' . $ligne . '", "' . $colonne . '", "' . 1 . '")';
                $result = mysqli_query($db_handle, $sql);
                $sql1='SELECT * FROM `rdv` WHERE `ligne` = ' . $ligne . ' and `colonne` = ' . $colonne;
                $res=mysqli_query($db_handle, $sql1);
                while ($data = mysqli_fetch_assoc($res)){
                    $rID=$data['rID'];
                }
                header("Location: payement.php?spe=$spe&rID=$rID");
            }
        }
    }
    else
    {
        echo "<p class='lead'>Erreur:<br></p>" . $erreur;
        echo "<a class='btn btn-outline-dark btn-lg my-5' href='rdv.php?mID=$mID&spe=$spe'>Retour</a>";
    }
    ?>
</div>

    <!-- Footer-->
    <footer id="footer" class="bg-white">
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Contact</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="text-muted">Téléphone :</a></li>
                        <li class="mb-2"><a class="text-muted">Mail : </a></li>
                        <li class="mb-2"><a class="text-muted">Adresse : </a></li>
                    </ul>
                    <ul class="list-inline mt-4">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Google Map</h6>
                    <div class="iframe-container">
                        <iframe width="300" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=omnes%20education&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                    <p class="text-muted mb-4">Abonnez-vous pour recevoir des nouveautés de notre site par mail !</p>
                    <div class="p-1 rounded border">
                        <div class="input-group">
                            <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light py-4">
            <div class="container text-center">
                <p class="text-muted mb-0 py-2">Copyright © Projet Piscine 2022</p>
            </div>
        </div>
    </footer>
</body>
</html>
