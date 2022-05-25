<?php
session_start();
$database = "omnes";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$d=$_GET['cID'];
$spe=$_GET['spe'];
$e=$_SESSION['mID'];
if ($db_found) {
    if(isset($_POST['send']))
    {
        $m=$_POST['message'];
        $i=0;
        $sql="INSERT INTO echange(msgID,sms,dest,emet)
        VALUES($i,'$m',$d,$e)";
        $result =mysqli_query($db_handle, $sql);
        echo "Message Envoye";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
    <textarea name="message"></textarea>
    <input type="submit" name="send">
    </form>

<section>
    <?php
    $getmsg=mysqli_query($db_handle, "SELECT * FROM echange WHERE (dest=$e AND emet=$d) OR (dest=$d AND emet=$e)");
    while ($data = mysqli_fetch_assoc($getmsg)) {
        if($data['dest'] == $e)
        {
            ?><p style="color:red;"><?php echo $data['sms']; ?></p>
            <?php   
        }
        else if($data['dest'] == $d)
        {
            ?><p style="color:blue;"><?php echo $data['sms']; ?></p>
            <?php 
        }
    }
    //fermer la connexion
    mysqli_close($db_handle);
    ?>
    <br>
    <?php echo "<a href='client.php?spe=$spe'>Retour</a>"; ?>
</section>
</body>
</html>
