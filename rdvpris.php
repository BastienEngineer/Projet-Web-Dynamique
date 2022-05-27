<?php 
    echo '<link href="css/styles.css" rel="stylesheet" type="text/css" />';  
    
    echo '<!DOCTYPE html>
<html>
<head>
    <title>Rendez-vous</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js"></script>
    <script src="js/scripts_E.js"></script>
</head>
<body>

    <!-- Navigation-->
    <nav id="nav" class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a href="#" class="navbar-brand text-uppercase font-weight-bold"><img src="img/logo.png" alt="Logo" width="180"> </a>
            <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link text-uppercase font-weight-bold">Accueil <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="parcourir.html" class="nav-link text-uppercase font-weight-bold">Tout parcourir</a></li>
                    <li class="nav-item"><a href="recherche.php" class="nav-link text-uppercase font-weight-bold">Recherche</a></li>
                    <li class="nav-item"><a href="rdv.html" class="nav-link text-uppercase font-weight-bold">Rendez-vous</a></li>
                    <li class="nav-item"><a href="compte.php" class="nav-link text-uppercase font-weight-bold">Votre compte</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="fw-light">Vertically Centered Masthead Content</h1>
                    <p class="lead">A great starter layout for a landing page</p>
                    <a href="#content" class="btn btn-outline-light btn-lg js-scroll-trigger" role="button">Prenez un rendez-vous !</a>
                </div>
            </div>
        </div>
    </header>

    <section id="content" class="py-5">
        <div class="container">
            <h2 class="fw-light">Rendez-vous</h2>
            <p>
                Nos coachs à votre disposition pour prendre un rendez-vous. Veuillez choisir un rendez-vous pour
                une activités sportives, des sports de compétition ou pour les salles de sport Omnes.
            </p>
        </div>
    </section>
    <!-- Section -->
    <div class="container">';
    
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
        $erreur .= "Veuillez appuyer sur un bouton !!!";
    }
    if ($erreur == "") {
        if ($db_found)
        {
            $sql = 'SELECT * FROM `rdv` WHERE `ligne` = ' . $ligne . ' and `colonne` = ' . $colonne;
            $result = mysqli_query($db_handle, $sql);
            if (mysqli_num_rows($result) != 0)
            {
	            echo "<p>Deja reserve.</p>";
                echo "<a class='btn btn-outline-dark' href='rdv.php?mID=$mID&spe=$spe'>Retour</a>";
            }
            else
            {
                $i=0;
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
        echo "Erreur:<br>" . $erreur;
        echo "<a class='btn btn-outline-dark' href='rdv.php?mID=$mID&spe=$spe'>Retour</a>";
    }
    


    echo '    </div>

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
</html>';

?>