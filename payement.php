<!-- Saisie des coordonnes bancaires pour payer -->
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
<div class="card text-center">
    <div class="card-header">
    <h4>Payer votre séance</h4>
    </div>
    <div class="card-body">
    <?php 
    $spe=$_GET['spe'];
    $i=$_GET['rID'];
    echo"<form action='validerPayement.php?spe=$spe&rID=$i' method='post' class='was-validated'>"; ?>
        <div class="form-group">
        <div class="row">
        <h5 class="card-title">Type de carte de paiement</h5>
        <div class="col-sm-2 mb-3">
        <div class="form-check">
        <input class="form-check-input" type="radio" id="1" name="carte" value="1" required>
        <label class="form-check-label" for="1">Visa</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" id="2" name="carte" value="2" required>
        <label class="form-check-label" for="2">MasterCard</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" id="3" name="carte" value="3" required>
        <label class="form-check-label" for="3">AmericanExpress</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" id="4" name="carte" value="4" required>
        <label class="form-check-label" for="4">Paypal</label>
        </div>
        </div>
        </div>
        </div>

        <div class="form-group row">
        <label for="numero" class="col-sm-6 col-form-label">Numéro de votre CB</label>
        <div class="col-sm-6">
        <input id="numero" class="form-control" type="text" placeholder="0000000000000000" pattern="[0-9]{16}" name="num" required>
        </div>
        </div>
        <div class="form-group row">
        <label for="nom" class="col-sm-6 col-form-label">Nom de votre CB</label>
        <div class="col-sm-6">
        <input id="nom" class="form-control" type="text" pattern="[a-zA-Z]+" name="nom" required>
        </div>
        </div>

        <div class="form-group row">
        <label for="date" class="col-sm-6 col-form-label">Date d'expiration</label>
        <div class="col-sm-6">
        <input id="date" class="form-control" type="date" name="date" required>
        </div>
        </div>

        <div class="form-group row">
        <label for="code" class="col-sm-6 col-form-label">Code de securité</label>
        <div class="col-sm-6">
        <input id="code" class="form-control" type="password" placeholder="000" pattern="[0-9]{3}" name="code" required>
        </div>
        </div>
        <input class="btn btn-outline-dark btn-lg" type="submit" value="Payer" name="payer">
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>
