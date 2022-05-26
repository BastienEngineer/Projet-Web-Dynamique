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

<!-- Section -->
<div class="container my-5 py-5">
<h3 class="text-center text-white my-5 py-5">Activités sportives</h3>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


<!-- Contrôles -->
<a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->

        <div class="carousel-item active">
            <div class= "row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                    <div class="card mb-2">
                        <img class="card-img-top" src="img/musculation.jpg"
                        alt="Card image cap">
                        <div class="card-body text-center">
                                <h4 class="card-title">Musculation</h4>
                                <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                                <form action="" method="post">
                                    <input name="b1" type="submit" value="Sélectionner" class="btn btn-outline-primary"></input>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img class="card-img-top" src="img/fitness.jpg"
                        alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Fitness</h4>
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                            <form action="" method="post">
                                <input name="b2" type="submit" value="Sélectionner" class="btn btn-outline-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img class="card-img-top" src="img/biking.jpg"
                        alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Biking</h4>
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                            <form action="" method="post">
                                <input name="b3" type="submit" value="Sélectionner" class="btn btn-outline-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img class="card-img-top" src="img/cardio.jpg"
                        alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title"> Cardio-Training</h4>
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                            <form action="" method="post">
                                <input name="b4" type="submit" value="Sélectionner" class="btn btn-outline-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img class="card-img-top" src="img/collectif.png"
                        alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Cours Collectifs</h4>
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                            <form action="" method="post">
                                <input name="b5" type="submit" value="Sélectionner" class="btn btn-outline-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
            <?php
                $conn=mysqli_connect('localhost','root','');
                $d=mysqli_select_db($conn,'omnes');
                $sql="";
                if( isset($_POST['b1'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "musculation"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe'><button type='button' class='btn btn-success btn-lg'>Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe'><button type='button' class='btn btn-info btn-lg'>Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV'><button type='button' class='btn btn-secondary btn-lg'>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                    }
                    else
                    {
                        echo " error";
                    }
                  }
                  if( isset($_POST['b2'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "fitness"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe1=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV1=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe1'><button type='button' class='btn btn-success btn-lg'>Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe1'><button type='button' class='btn btn-info btn-lg'>Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV1'><button type='button' class='btn btn-secondary btn-lg'>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                    }
                    else
                    {
                        echo " error";
                    }
                  }
                  if( isset($_POST['b3'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "biking"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe2=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV2=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe2'><button type='button' class='btn btn-success btn-lg'>Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe2'><button type='button' class='btn btn-info btn-lg'>Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV2'><button type='button' class='btn btn-secondary btn-lg'>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                    }
                    else
                    {
                        echo " error";
                    }
                
                  }
                  if( isset($_POST['b4'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "cardio"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe3=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV3=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe3'><button type='button' class='btn btn-success btn-lg'>Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe3'><button type='button' class='btn btn-info btn-lg'>Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV3'><button type='button' class='btn btn-secondary btn-lg'>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                    }
                    else
                    {
                        echo " error";
                    }
                
                  }
                  if( isset($_POST['b5'])  ){
                    $sql="SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = 'collectif'";
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe4=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV4=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe4'><button type='button' class='btn btn-success btn-lg'>Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe4'><button type='button' class='btn btn-info btn-lg'>Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV4'><button type='button' class='btn btn-secondary btn-lg'>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                    }
                    else
                    {
                        echo " error";
                    }
                
                }
                
                mysqli_close($conn);
            ?>
</div>

<!-- Footer-->
<footer id="footer" class="bg-white">
    <div class="container py-5">
        <div class="row py-4">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Contact</h6>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a class="text-muted">Téléphone : +33 01 22 33 44 55</a></li>
              <li class="mb-2"><a class="text-muted">Mail : salle.sport@omnessports.fr</a></li>
              <li class="mb-2"><a class="text-muted">Adresse : 43 Quai de Grenelle, 75015 Paris</a></li>
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
                  <a href="index.html"><button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button></a>
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