<?php 
session_start();
$carte = isset($_POST["carte"])? $_POST["carte"] : "";
$num = isset($_POST["num"])? $_POST["num"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$date = isset($_POST["date"])? $_POST["date"] : "";
$code = isset($_POST["code"])? $_POST["code"] : "";

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
    header("Location:payement.php"); 
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
            $m="Merci d avoir reserve notre RDV";
            $d=$_SESSION['Mail'];
            $i=0;
            $insert="INSERT INTO mail(eID,destID,email,dest,emet)
            VALUES($i,$e,'$m','$d','Service d Omnes Sport')";
            $result =mysqli_query($db_handle, $insert);
            }
            else
            {
                header("Location:payement.php");
            }
        }
        else
        {
            $sql = "INSERT INTO cb (cbID, Numero, Nom, Date, Code)
            VALUES($e, '$_POST[num]', '$_POST[nom]', '$_POST[date]', '$_POST[code]')";
            $result =mysqli_query($db_handle, $sql);
            $mot="Merci d avoir reserve notre RDV";
            $dMail=$_SESSION['Mail'];
            $iD=0;
            $ins="INSERT INTO mail(eID,destID,email,dest,emet)
            VALUES($iD,$e,'$mot','$dMail','Service d Omnes Sport')";
            $result1 =mysqli_query($db_handle, $ins);
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