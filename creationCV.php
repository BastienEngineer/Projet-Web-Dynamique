<?php 
session_start();
$mail = isset($_POST["courrier"])? $_POST["courrier"] : "";
$formation = isset($_POST["formation"])? $_POST["formation"] : "";
$experience = isset($_POST["experience"])? $_POST["experience"] : "";
$idCoach=0;
$prenomCoach="";
$erreur = "";

if ($formation == "") {
    $erreur .= "Le champ formation est vide. <br>";
}
if ($mail == "") {
    $erreur .= "Le champ mail est vide. <br>";
}
if ($experience == "") {
    $erreur .= "Le champ experience est vide. <br>";
}
if ($erreur != "") {
    echo "Erreur: <br>" . $erreur;
    header("Location: choixCV.php");
}
else
{
// Pour creer le CV
if (isset($_POST["cv"])) {
    $database = "omnes";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
    // on verifie le bon coach par son mail
    $r=mysqli_query($db_handle, "SELECT Mail FROM coach WHERE Mail='$mail'");
    if(mysqli_num_rows($r))
    {
        $res=mysqli_query($db_handle, "SELECT cID,Prenom FROM coach WHERE Mail='$mail'");
        while ($data = mysqli_fetch_assoc($res)) {
            $idCoach=$data['cID'];
            $prenomCoach=$data['Prenom'];
        }
        // on verifie s il existe pas un CV deja
        $verifCV=mysqli_query($db_handle, "SELECT * FROM cv WHERE cvID=$idCoach");
        if(mysqli_num_rows($r))
        {
            // on le supprime et on le cree pour l insere
            $sql2="DELETE FROM cv WHERE cvID=$idCoach AND prenom='$prenomCoach' ";
            $result2 =mysqli_query($db_handle, $sql2);
            $sql="INSERT INTO cv(cvID,prenom,formation,experience)
            VALUES($idCoach,'$prenomCoach','$formation','$experience')";
            $result =mysqli_query($db_handle, $sql);
        }
        else
        {
            // on le cree pour inserer dans la BDD
            $sql="INSERT INTO cv(cvID,prenom,formation,experience)
            VALUES($idCoach,'$prenomCoach','$formation','$experience')";
            $result =mysqli_query($db_handle, $sql);
        }
        // on cree son CV par XML
        $r=mysqli_query($db_handle, "SELECT * FROM cv WHERE cvID=$idCoach");
        $document = new DOMDocument( "1.0", "UTF-8" );
        $document->preserveWhiteSpace = false;
        $document->formatOutput = true;

        $xslt = $document->createProcessingInstruction('xml-stylesheet', 'type="text/css" href="css/xml.css"');
        $document->appendChild($xslt);

        /*
        $html = $document->createElement('html');
        $document->appendChild($html);

        $body = $document->createElement('body');
        $html->appendChild($body);
        */
        // on cree la racine et on l insère dans le document
        $div = $document->createElement('CVs');
        //$body->appendChild($div); 
        $document->appendChild($div); 

        if(mysqli_num_rows($r))
        {
            while ($data = mysqli_fetch_assoc($r)) {
                $cv=$document->createElement('cv');
                $div->appendChild($cv);
                $prenomCV=$document->createElement('prenom');
                $i1=$document->createTextNode($data['prenom']);
                $prenomCV->appendChild($i1);
                $cv->appendChild($prenomCV);

                $formationCV=$document->createElement('formation');
                $i2=$document->createTextNode($data['formation']);
                $formationCV->appendChild($i2);
                $cv->appendChild($formationCV);

                $experienceCV=$document->createElement('experience');
                $i3=$document->createTextNode($data['experience']);
                $experienceCV->appendChild($i3);
                $cv->appendChild($experienceCV);
            }
            //$document->appendChild($html);
            $document->save("xml/$prenomCoach.xml");
            header("Location:admin.php");
        }
        else
        {
            header("Location:choixCV.php");
        }
    }
    else
    {
        header("Location:choixCV.php");
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
