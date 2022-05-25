<?php
session_start();
$database = "omnes";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$e=$_SESSION['mID'];
$de=$_SESSION['Mail'];
$spe=$_GET['spe'];
$emet="";
$dest="";
$email="";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section>
    <?php 
        if ($db_found) {
            $getID="SELECT destID FROM mail WHERE destID=(SELECT mID FROM client WHERE mID=$e)";
            $r=mysqli_query($db_handle,$getID);
            if (mysqli_num_rows($r)) 
            {
                $getE=mysqli_query($db_handle, "SELECT * FROM mail WHERE destID=$e AND dest='$de' "); //dest=(SELECT Mail FROM client WHERE mID=$e)
                while ($data = mysqli_fetch_assoc($getE)) {
                    $emet=$data['emet'];?>
                    <p>De : <?php echo $emet; ?></p>
                    <?php $dest=$data['dest']; ?>
                    <p>A : <?php echo $dest; ?></p>
                    <?php $email=$data['email']; ?>
                    <p>Message : <?php echo $email; ?></p><?php 
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
    <br>
    <?php echo "<a href='client.php?spe=$spe'>Retour</a>"; ?>
</section>
</body>
</html>
