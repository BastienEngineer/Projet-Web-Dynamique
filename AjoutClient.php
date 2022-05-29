<?php 
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$postal = isset($_POST["code"])? $_POST["code"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$carte = isset($_POST["carte"])? $_POST["carte"] : "";
$spe=$_GET["spe"];

$erreur = "";
if ($prenom == "") {
    $erreur .= "Le champ prenom est vide. <br>";
}
if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($mail == "") {
    $erreur .= "Le champ mail est vide. <br>";
}
if ($mdp == "") {
    $erreur .= "Le champ mdp est vide. <br>";
}
if ($adresse == "") {
    $erreur .= "Le champ adresse est vide. <br>";
}
if ($ville == "") {
    $erreur .= "Le champ ville est vide. <br>";
}
if (empty($postal)) {
    $postal = 0;
    $erreur .= "Le champ code postal est vide. <br>";
}
if ($pays == "") {
    $erreur .= "Le champ pays est vide. <br>";
}
if ($tel == "") {
    $erreur .= "Le champ tel est vide. <br>";
}
if (empty($carte)) {
    $carte = 0;
    $erreur .= "Le champ carte est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location:clientCreate.php?spe=$spe"); 
}
else
{
    $postal = (int)$postal;
    $carte = (int)$carte;
    // creer le client
    if (isset($_POST["creation"])) {
        $database = "omnes";
        //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        if ($db_found) {
        $id=0;
        // insere dans la BDD
        $sql = "INSERT INTO client (mID, Nom, Prenom, Mail, MotdePasse, Adresse, Ville, Postal, Pays, Tel, CarteE)
        VALUES($id, '$_POST[nom]', '$_POST[prenom]', '$_POST[courrier]', '$_POST[mdp]','$_POST[adresse]', '$_POST[ville]', $postal, '$_POST[pays]','$_POST[tel]', $carte)";
        $result =mysqli_query($db_handle, $sql);
        echo "Insertion reussi";
        header("Location:clientLogin.php?spe=$spe");
        }
        else{
            echo "<br>Database not found";
        }
        //fermer la connexion
        mysqli_close($db_handle);
    } 
} 
?>