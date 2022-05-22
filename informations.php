<?php
    //declaration des variables
    $Nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
    $telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
    $Adress1 = isset($_POST["Adress1"])? $_POST["Adress1"] : "";
    $Adress2 = isset($_POST["Adress2"])? $_POST["Adress2"] : "";
    $Ville = isset($_POST["Ville"])? $_POST["Ville"] : "";
    $Code postale = isset($_POST["Code postale"])? $_POST["Code postale"] : "";
    $Pays = isset($_POST["Pays"])? $_POST["Pays"] : "";
    $Carte etudiant du client = isset($_POST["Carte etudiant du client"])? $_POST["Carte etudiant du client"] : "";


    $erreur = "";
    if ($Nom == "") {
        $erreur .= "Le champ Nom est vide.<br>";
    }
    if ($Prenom == "") {
        $erreur .= "Le champ Prenom est vide.<br>";
    }
    if ($Telephone == "") {
        $erreur .= "Le champ Telephone est vide.<br>";
    }
    if ($Adress1 == "") {
        $erreur .= "Le champ Adress1 est vide.<br>";
    }
    if ($Adress2 == "") {
        $erreur .= "Le champ Adress2 est vide.<br>";
    }
    if ($Ville == "") {
        $erreur .= "Le champ Ville est vide.<br>";
    }
    if ($Code == "") {
        $erreur .= "Le champ Code est vide.<br>";
    }
    if ($Pays == "") {
        $erreur .= "Le champ Pays est vide.<br>";
    }
    if ($Carte etudiant du client == "") {
        $erreur .= "Le champ Carte etudiant du client est vide.<br>";
    }
    

        echo '<table border="1"><tr><td>Nom</td><td>' . $nom . '</td></tr>';
        echo '<tr><td>Telephone</td><td>' . $telephone . '</td></tr>';
        echo '<tr><td>Nombre de jours de visite</td><td>' . $jour . '</td></tr>';
        echo '<tr><td>Date d arrivee</td><td>' . $dateA . '</td></tr>';
        echo '<tr><td>Date de depart</td><td>' . $dateD . '</td></tr>';
        echo '<tr><td>Nombre de billets adultes</td><td>' . $nbA . '</td></tr>';
        echo '<tr><td>Nombre de billets enfants</td><td>' . $nbE . '</td></tr>';
        echo '<tr><td>Hebergement</td><td>' . $hebergement . '</td></tr>';
        echo '<tr><td>Petit-Dejeuner</td><td>' . $dejeuner . '</td></tr>';
        echo '<tr><td>Prix</td><td>' . $prix . '</td></tr>';
        echo '</table>';
    }
    else {
        echo "Erreur:<br>" . $erreur;
    }
?>
