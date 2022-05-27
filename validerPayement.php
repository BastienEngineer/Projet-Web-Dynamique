<?php 
session_start();
$carte = isset($_POST["carte"])? $_POST["carte"] : "";
$num = isset($_POST["num"])? $_POST["num"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$date = isset($_POST["date"])? $_POST["date"] : "";
$code = isset($_POST["code"])? $_POST["code"] : "";
$spe=$_GET['spe'];
$rID=$_GET['rID'];
$jour="";
$horaire="";
$erreur = "";
if (empty($carte)) {
    $erreur .= "Le champ carte est vide. <br>";
}
if ($num == "") {
    $erreur .= "Le champ num est vide. <br>";
}
if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($date == "") {
    $erreur .= "Le champ date est vide. <br>";
}
if ($code == "") {
    $erreur .= "Le champ code est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location:payement.php?spe=$spe&rID=$rID"); 
}
else
{
    if(isset($_POST["payer"])) {
        $database = "omnes";
        //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        if ($db_found) {
        $e=$_SESSION['mID'];
        $getID="SELECT cbID FROM cb WHERE cbID= (SELECT mID FROM client WHERE mID=$e)";
        $r=mysqli_query($db_handle,$getID);
        if (mysqli_num_rows($r)) 
        {
            $res =mysqli_query($db_handle, "SELECT * FROM cb WHERE cbID=$e AND Numero='$_POST[num]' AND Nom='$_POST[nom]' AND Date='$_POST[date]' AND Code='$_POST[code]'");
            if (mysqli_num_rows($res)) 
            {
            echo "<table border=\"1\">";
            echo "<tr>";
            echo "<th>" . "Numero" . "</th>";
            echo "<th>" . "Nom" . "</th>";
            echo "</tr>";
            while ($data = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>" . $data['Numero'] . "</td>";
            echo "<td>" . $data['Nom'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            $res1=mysqli_query($db_handle, "SELECT * FROM rdv WHERE clientID=$e AND rID=$rID");
            while ($data1 = mysqli_fetch_assoc($res1)) {
               $jour=$data1['jour'];
               $horaire=$data1['horaire'];

            }
            $m="Merci d avoir reserve notre RDV le $jour a $horaire ";
            $d=$_SESSION['Mail'];
            $insert="INSERT INTO mail(eID,destID,email,dest,emet)
            VALUES($rID,$e,'$m','$d','Service d Omnes Sport ')";
            $result =mysqli_query($db_handle, $insert);
            header("Location:client.php?spe=$spe");
            }
            else
            {
                header("Location:payement.php?spe=$spe&rID=$rID");
            }
        }
        else
        {
            $sql = "INSERT INTO cb (cbID, Numero, Nom, Date, Code)
            VALUES($e, '$_POST[num]', '$_POST[nom]', '$_POST[date]', '$_POST[code]')";
            $result =mysqli_query($db_handle, $sql);
            $res1=mysqli_query($db_handle, "SELECT * FROM rdv WHERE clientID=$e AND rID=$rID");
            while ($data1 = mysqli_fetch_assoc($res1)) {
               $jour=$data1['jour'];
               $horaire=$data1['horaire'];
            }
            $m="Merci d avoir reserve notre RDV le $jour a $horaire ";
            $dMail=$_SESSION['Mail'];
            $ins="INSERT INTO mail(eID,destID,email,dest,emet)
            VALUES($rID,$e,'$m','$dMail','Service d Omnes Sport')";
            $result1 =mysqli_query($db_handle, $ins);
            header("Location:client.php?spe=$spe");
        }
        }
        else{
            echo "<br>Database not found";
        }
        //fermer la connexion
        mysqli_close($db_handle);
    } 
} 
?>