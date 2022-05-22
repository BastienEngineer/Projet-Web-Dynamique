<?php 
$mot = isset($_POST["mot"])? $_POST["mot"] : "";
if (isset($_POST["search"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $result =mysqli_query($db_handle, "SELECT * FROM client WHERE pseudo='$_POST[mot]' OR Mdp='$_POST[mot]'") or die(mysqli_error());
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>" . "Login" . "</th>";
    echo "</tr>";
    while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $data['pseudo'] . "</td>";
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