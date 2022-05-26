<?php
session_start();
$database = "omnes";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$d=$_GET['mID'];
$e=$_SESSION['cID'];
if ($db_found) {
    if(isset($_POST['send']))
    {
        $m=$_POST['message'];
        $i=0;
        $sql="INSERT INTO echange(msgID,sms,dest,emet)
        VALUES($i,'$m',$d,$e)";
        $result =mysqli_query($db_handle, $sql);
        echo "<script type='text/javascript'>alert('Message envoyé');</script>";
    }
}
else
{
    echo "<br>Database not found";
}  
?>

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
        <form method="post" action="">
            <div class="d-flex flex-row justify-content-between p-3">
                <i class="fa fa-chevron-left"></i>
                <p class="lead font-weight-bold">Chat Room</p>
                <i class="fa fa-times"></i>
            </div>
                <div class="form-group px-3">
                    <textarea name="message" class="form-control" rows="5" placeholder="Saisir votre message..."></textarea>
                </div>
                <div class="col my-4 py-4 text-center">
                    <?php echo "<a class='btn btn-outline-dark' href='coach.php'>Retour</a>"; ?>
                    <input class="btn btn-outline-dark" type="submit" name="send">
                </div>
        </form>
    </div>
</div>

<div class="container d-flex justify-content-center">
<div class="card mt-5 mb-5" style="width:50%;">
    <?php
    $getmsg=mysqli_query($db_handle, "SELECT * FROM echange WHERE dest=$e AND emet=$d OR dest=$d AND emet=$e");
    while ($data = mysqli_fetch_assoc($getmsg)) {
        if($data['dest'] == $d)
        {
            ?><p class="px-3 text-left" style="color:red;"><?php echo $data['sms']; ?></p>
            <?php   
        }
        else if($data['dest'] == $e)
        {
            ?><p class="px-3 text-right" style="color:blue;"><?php echo $data['sms']; ?></p>
            <?php 
        }
    }
    //fermer la connexion
    mysqli_close($db_handle);
    ?>
</div>
</div>
</body>
</html>
