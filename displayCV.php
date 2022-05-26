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
    <h4>CV</h4>
    </div>
        <div class="form-group row">
        <?php
        $prenomCV=$_GET["p"];
        $xmldata = simplexml_load_file("xml/$prenomCV.xml") or die("Failed to load");
        foreach($xmldata->children() as $cv) {         
            echo "<p>$cv->prenom </p>";  
            echo "<p>$cv->formation </p>";    
            echo "<p>$cv->experience </p>";
        } 
        ?>
        <a href="parcourir.html"><input class="btn btn-outline-dark btn-lg" type="submit" value="Retour"></a>
        </div>
        
  </div>
</div>
</div>
</div>
</body>
</html>