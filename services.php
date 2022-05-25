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

<div class="container my-5 py-5">
    <div class="row my-5 py-5">
        <div class="col-lg-4 py-2">
          <div class="list-group" role="tablist">
            <a class="list-group-item list-group-item-action" id="onglet1" data-toggle="list" href="#o1">Personnels de la salle de sport</a>
            <a class="list-group-item list-group-item-action" id="onglet2" data-toggle="list" href="#o2">Horaire de la gym</a>
            <a class="list-group-item list-group-item-action" id="onglet3" data-toggle="list" href="#o3">Règles sur l’utilisation des machines</a>
            <a class="list-group-item list-group-item-action" id="onglet4" data-toggle="list" href="#o4">Nouveaux clients</a>
            <a class="list-group-item list-group-item-action" id="onglet5" data-toggle="list" href="#o5">Alimentation et nutrition</a>
            <a class="list-group-item list-group-item-action" id="onglet6" data-toggle="list" href="#o6">Gynécologie</a>
          </div>
        </div>
        <div class="col-lg-8 py-2">
          <div class="tab-content text-white">
            <div class="tab-pane fade" id="o1">Contenu du premier onglet</div>
            <div class="tab-pane fade" id="o2">Contenu du deuxième onglet</div>
            <div class="tab-pane fade" id="o3">
            <p class="lead">1. Essuyez vos appareils
            <br>2. Ne soyez pas en retard aux cours collectifs
            <br>3. Rangez vos poids et vos haltères
            <br>4. Enlevez-les poids de la barre de musculation
            <br>5. Ne monopolisez pas les appareils…
            <br>6. … ni les vestiaires
            <br>7. Laissez votre téléphone dans votre casier
            <br>8. La musique doit vraiment adoucir les mœurs
            <br>9. Soyez prévenants avec les débutants
            <br>10. Soyez discrets</p>
            </div>
            <div class="tab-pane fade" id="o4">
            <p>Veuillez trouver ci-joint quelques réponses aux questions fréquemment posées.</p>
            <strong>Le port du masque est-il obligatoire ?</strong>
            <br>Non, depuis le 28 février, le port du masque n’est plus obligatoire à l’intérieur du club.
            </div>
            <div class="tab-pane fade" id="o5">Contenu du cinquieme onglet</div>
            <div class="tab-pane fade" id="o6">Contenu du sixieme onglet</div>
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