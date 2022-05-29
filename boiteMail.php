<?php
session_start();
$database = "omnes";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$e=$_SESSION['mID'];
$de=$_SESSION['Mail'];
$emet="";
$dest="";
$email="";
?>

<!-- Mail de confirmation du RDV -->
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
<div class="container d-flex justify-content-center">
<div class="card mt-5" style="width:50%;">
    <div class="card-header text-center">
    <h4>Voici votre reçu</h4>
    </div>
    <div class="card-body">
    <?php 
        if ($db_found) {
            // on affiche le mail du rdv choisi
            $getID="SELECT destID FROM mail WHERE destID=(SELECT mID FROM client WHERE mID=$e)";
            $r=mysqli_query($db_handle,$getID);
            if (mysqli_num_rows($r)) 
            {
                $getE=mysqli_query($db_handle, "SELECT * FROM mail WHERE destID=$e AND dest='$de' "); //dest=(SELECT Mail FROM client WHERE mID=$e)
                while ($data = mysqli_fetch_assoc($getE)) {
                    $emet=$data['emet'];?>

                    <div class="form-group row">
                    <label for="dest" class="col-sm-4 col-form-label">De :</label>
                    <div class="col-sm-8">
                    <input id="dest" class="form-control" type="text" value="<?php echo $emet; ?>" disabled>
                    </div>
                    </div>

                    <?php $dest=$data['dest']; ?>

                    <div class="form-group row">
                    <label for="emet" class="col-sm-4 col-form-label">A :</label>
                    <div class="col-sm-8">
                    <input id="emet" class="form-control" type="text" value="<?php echo $dest; ?>" disabled>
                    </div>
                    </div>

                    <?php $email=$data['email']; ?>

                    <div class="form-group row px-3 pt-3">
                    <textarea disabled class="form-control" rows="5"><?php echo $email; ?></textarea>
                    </div>
                    <?php 
                }
            }
            else
            {
                $email="Aucun message";
                echo $email;
            }
            
        }
        else
        {
            echo "<br>Database not found";
        }  
        //fermer la connexion
        mysqli_close($db_handle);
    ?>
    <div class="col mt-5 pt-5 text-center">
    <?php echo "<a class='btn btn-outline-dark' href='client1.php'>Retour</a>"; ?>
    </div>
    </div>
</div>
</div>
</body>
</html>
