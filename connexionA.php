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
    <div class="border border-light py-5" style="border-radius: 33px;">
    <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-4">
    <form action="admin.php" method="post"> 
    <div class="form-group"> 
        <label for="text">Nom : </label>  
        <input type="text" class="form-control" placeholder="Nom" name="nom"/><br/>
    </div>
    <div class="form-group">
        <label for="text">Prenom : </label>  
        <input type="text" class="form-control" placeholder="Prenom" name="prenom"/><br/>
    </div>
    <div class="form-group">
        <label for="email">Mail : </label> 
        <input type="email" class="form-control" placeholder="nom@gmail.com" id="email" name="courrier"/><br/> 
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-outline-light btn-lg" value="Se connecter" name="admin">  
    </div>  
    </form>
    </div>
    </div>
    </div>
</div>
</body>
</html>