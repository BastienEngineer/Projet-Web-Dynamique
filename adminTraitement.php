<?php 
session_start();
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$file = isset($_POST["file"])? $_POST["file"] : "";
$spe = isset($_POST["spe"])? $_POST["spe"] : "";
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$salle = isset($_POST["salle"])? $_POST["salle"] : "";
$id=0;
$pre="";

$erreur = "";
if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($prenom == "") {
    $erreur .= "Le champ prenom est vide. <br>";
}
if ($file == "") {
    $erreur .= "Le champ file est vide. <br>";
}
if ($spe == "") {
    $erreur .= "Le champ spe est vide. <br>";
}
if ($mail == "") {
    $erreur .= "Le champ mail est vide. <br>";
}
if ($salle == "") {
    $erreur .= "Le champ salle est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location: choixAddCoach.php");
}
else
{
if (isset($_POST["add"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $i=0;
    $sql="INSERT INTO coach(cID,Nom,Prenom,Photo,Specialite,Mail,Bureau)
    VALUES($i,'$nom', '$prenom', 'img/$file', '$spe', '$mail', '$salle')";
    $result =mysqli_query($db_handle, $sql);
    
    $get="SELECT cID,Prenom FROM coach WHERE (Nom='$_POST[nom]' AND Prenom='$_POST[prenom]' AND Photo='img/$_POST[file]' AND Specialite='$_POST[spe]' AND Mail='$_POST[courrier]' AND Bureau='$_POST[salle]')";
    $r=mysqli_query($db_handle, $get);
    while ($data = mysqli_fetch_assoc($r)) {
    $id=$data['cID'];
    $pre=$data['Prenom'];
    $sql1="INSERT INTO cv(cvID,prenom,formation,experience)
    VALUES($id,'$pre','Prof de sport','BAC S')";
    $result1 =mysqli_query($db_handle, $sql1);

    $sql2 = "INSERT INTO emploistemps(c_id,lundi_AM,lundi_PM,mardi_AM,mardi_PM,mercredi_AM,mercredi_PM,jeudi_AM,jeudi_PM,vendredi_AM,vendredi_PM,samedi_AM,samediPM)
    VALUES($id,1,0,1,0,1,0,1,0,1,0,1,0)";
    $result2 = mysqli_query($db_handle, $sql2);
    header("Location: choixCV.php");
    }
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
} 
if (isset($_POST["delete"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $getID="SELECT cID FROM coach WHERE (Nom='$_POST[nom]' AND Prenom='$_POST[prenom]' AND Photo='img/$_POST[file]' AND Specialite='$_POST[spe]' AND Mail='$_POST[courrier]' AND Bureau='$_POST[salle]')";
    $r=mysqli_query($db_handle, $getID);
    if (mysqli_num_rows($r)) {
    while ($data = mysqli_fetch_assoc($r)) {
        $e=$data['cID'];
    }
    $sql="DELETE FROM coach WHERE cID=$e";
    $result=mysqli_query($db_handle, $sql);
    header("Location: admin.php");
    }
    else
    {
        header("Location: admin.php");
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