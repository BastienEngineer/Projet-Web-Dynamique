<?php  
 $connect = mysqli_connect("localhost", "root", "", "omnes");  
 $query ="SELECT * FROM coach ORDER BY cID DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html>
<head>
    <title>Projet Piscine</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">	
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>
<style>
table 
{
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}
</style>

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

<div class="container-fluid my-5 py-5"> 
<div class="my-5 py-5"> 
<h3 class="text-center text-white font-weight-light">Tableau de données des coachs</h3>  
<br />  
<div class="table-responsive">  
<table id="coachlist" class="table table-striped table-bordered" style="width:100%">  
    <thead>  
        <tr>  
            <td>Nom</td>  
            <td>Prenom</td>  
            <td>Photo</td>  
            <td>Spécialité</td>  
            <td>Mail</td>  
            <td>Bureau</td> 
        </tr>  
    </thead>
    <?php  
    while($row = mysqli_fetch_array($result))  
    {  
    $image = $row['Photo'];

            echo
           '<tr>  
            <td>'.$row["Nom"].'</td>  
            <td>'.$row["Prenom"].'</td>';
            echo "<td>" ."<img src='$image' height='80' width='120'>" . "</td>";
            echo '  
            <td>'.$row["Specialite"].'</td>  
            <td>'.$row["Mail"].'</td>  
            <td>'.$row["Bureau"].'</td>  
            </tr>';  
    }  
    ?>  
</table>  
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

<script>  
$(document).ready(function () {
    $('#coachlist').DataTable({
        paging: false,
        ordering: false,
        info: false,
    });
});  
 </script> 
</body>
</html>