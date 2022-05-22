<?php 
$mot = isset($_POST["mot"])? $_POST["mot"] : "";
if (isset($_POST["buttonR"])) {
    $database = "Omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    $result =mysqli_query($db_handle, "SELECT * FROM a WHERE nom=$mot OR lieu=$mot") or die(mysqli_error());
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>" . "ID" . "</th>";
    echo "<th>" . "Pays" . "</th>";
    echo "<th>" . "Capitale" . "</th>";
    echo "<th>" . "Superficie" . "</th>";
    echo "<th>" . "DateAdhesion" . "</th>";
    echo "<th>" . "Population1" . "</th>";
    echo "<th>" . "Devise" . "</th>";
    echo "<th>" . "PIB" . "</th>";
    echo "<th>" . "TauxChomage" . "</th>";
    echo "<th>" . "Drapeau" . "</th>";
    echo "</tr>";
    while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $data['ID'] . "</td>";
    echo "<td>" . $data['Pays'] . "</td>";
    echo "<td>" . $data['Capitale'] . "</td>";
    echo "<td>" . $data['Superficie'] . "</td>";
    echo "<td>" . $data['DateAdhesion'] . "</td>";
    echo "<td>" . $data['Population1'] . "</td>";
    echo "<td>" . $data['Devise'] . "</td>";
    echo "<td>" . $data['PIB'] . "</td>";
    echo "<td>" . $data['TauxChomage'] . "</td>";
    $image = $data['Drapeau'];
    echo "<td>" . "<img src='$image' height='100' width='160'>" . "</td>";
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