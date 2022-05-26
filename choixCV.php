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
    <form method="post" action="creationCV.php">
    <div class="form-group"> 
        <label for="text">Mail du coach : </label>  
        <input type="text" class="form-control" placeholder="Mail du coach" name="courrier"/><br/>
    </div>
    <div class="form-group">
        <label for="text">Formation : </label>  
        <input type="text" class="form-control" placeholder="Formation" name="formation"/><br/>
    </div>
    <div class="form-group"> 
        <label for="text">Experience : </label>  
        <input type="text" class="form-control" placeholder="Experience" name="experience"/><br/> 
    </div>
    <div class="text-center">
        <a class="btn btn-outline-light btn-lg" href="admin.php">Retour</a>
        <input type="submit" class="btn btn-outline-light btn-lg" name="cv" value="Creer CV">
    </div>  
    </form>
    </div>
    </div>
    </div>
</div>
</body>
</html>