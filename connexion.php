<?php 
$login = isset($_POST["log"])? $_POST["log"] : "";
$mdp = isset($_POST["password"])? $_POST["password"] : "";
$erreur = "";
if ($login == "") {
    $erreur .= "Le champ login est vide. <br>";
}
if ($mdp == "") {
    $erreur .= "Le champ mdp est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location:compte.php"); 
}
if (isset($_POST["connexion"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $result =mysqli_query($db_handle, "SELECT * FROM client WHERE pseudo='$_POST[log]' AND Mdp='$_POST[password]'");
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>" . "ID" . "</th>";
    echo "<th>" . "Login" . "</th>";
    echo "<th>" . "Mdp" . "</th>";
    echo "</tr>";
    while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $data['cID'] . "</td>";
    echo "<td>" . $data['pseudo'] . "</td>";
    echo "<td>" . $data['Mdp'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    }
    else{
        echo "<br>Database not found";
    }
    //fermer la connexion
    mysqli_close($db_handle);
}  
?>