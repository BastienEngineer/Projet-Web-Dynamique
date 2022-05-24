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
<!-- Navigation-->
<nav id="nav" class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container"><a href="index.html" class="navbar-brand text-uppercase font-weight-bold"><img src="img/logo.png" alt="Logo" width="180"> </a>
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

<div class="text-center text-white my-5 py-5">
    <div class="container-fluid">
        <div class="my-5 py-5">
            <div class="row justify-content-center align-items-center h-100">
                <form action="connexion.php" method="post">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="Admin" name="connexion">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="Coach" name="connexion">
                    <input type="submit" class="btn btn-outline-light btn-lg" value="Client" name="connexion"> 
                </form>
            </div>
        </div>
    </div>
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