<?php 
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

if (isset($_POST["payer"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $getID="SELECT PayID FROM membre WHERE mID=(SELECT cID FROM client)";
    $sql = "INSERT INTO cartepayement (cpID, Numero, Nom, Date, Code)
    VALUES($getID, '$_POST[num]', '$_POST[nom]', '$_POST[date]', '$_POST[code]')";
    $result =mysqli_query($db_handle, $sql);
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
}  
?>