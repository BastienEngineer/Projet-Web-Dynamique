<!-- Prendre un rdv -->
<!DOCTYPE html>
<html>
<head>
    <title>Projet Piscine</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>

<div class="container">
    <div class="my-5 py-5 text-white text-center">
        <h2 class="fw-light">Rendez-vous</h2>
        <p class="pt-5 lead">
            Nos coachs à votre disposition pour prendre un rendez-vous. Veuillez choisir un rendez-vous pour
            une activités sportives, des sports de compétition ou pour les salles de sport Omnes.
        </p>
    </div>
</div>

<div class="container text-center">
<?php 
    // on affiche l emploi du temps du coach selectionne
    $c_id=0;
    $spe=$_GET['spe'];
    $mID=$_GET['mID'];
    $nom="";
    $database = "omnes";
    $db_handle = mysqli_connect('localhost', 'root', '' );
    $db_found = mysqli_select_db($db_handle, $database);
    $s = "SELECT * FROM coach WHERE Specialite='$spe'";
    $res = mysqli_query($db_handle, $s);
    while ($data = mysqli_fetch_array($res))
    {
        $c_id=$data['cID'];
        $nom=$data['Prenom'];
    }
    if ($db_found)
    {
        $sql = "SELECT * FROM `emploisTemps` WHERE `c_id` = $c_id;";
        $result = mysqli_query($db_handle, $sql);
        while ($data = mysqli_fetch_array($result))
        {
            $array = array($data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12]);
        }
        echo '<table class="table table-bordered tableRDV"><tr><td class="table-dark">Specialité</td><td class="table-dark">Coach</td>';
        if($array[0] == 1 || $array[1] == 1)
        {
            if($array[0] == 0 || $array[1] == 0)
            {
                echo '<td class="table-dark">Lundi</td>';
            }
            else
            {
                echo '<td class="table-dark" colspan="2">Lundi</td>';
            }
        }
        if($array[2] == 1 || $array[3] == 1)
        {
            if($array[2] == 0 || $array[3] == 0)
            {
                echo '<td class="table-dark">Mardi</td>';
            }
            else
            {
                echo '<td class="table-dark" colspan="2">Mardi</td>';
            }
        }
        if($array[4] == 1 || $array[5] == 1)
        {
            if($array[4] == 0 || $array[5] == 0)
            {
                echo '<td class="table-dark">Mercredi</td>';
            }
            else
            {
                echo '<td class="table-dark" colspan="2">Mercredi</td>';
            }
        }
        if($array[6] == 1 || $array[7] == 1)
        {
            if($array[6] == 0 || $array[7] == 0)
            {
                echo '<td class="table-dark">Jeudi</td>';
            }
            else
            {
                echo '<td class="table-dark" colspan="2">Jeudi</td>';
            }
        }
        if($array[8] == 1 || $array[9] == 1)
        {
            if($array[8] == 0 || $array[9] == 0)
            {
                echo '<td class="table-dark">Vendredi</td>';
            }
            else
            {
                echo '<td class="table-dark" colspan="2">Vendredi</td>';
            }
        }
        if($array[10] == 1 || $array[11] == 1)
        {
            if($array[10] == 0 || $array[11] == 0)
            {
                echo '<td class="table-dark">Samedi</td>';
            }
            else
            {
                echo '<td class="table-dark" colspan="2">Samedi</td>';
            }
        }
        echo '</tr>';
        echo '<tr><td rowspan="14">'.$spe. '</td><td rowspan="14">' .$nom. '</td>';
        for($h=0; $h < 12; $h++)
        {
            if($array[$h] == 1)
            {
                if($h%2 == 0)
                {
                    echo '<td>AM</td>';
                }
                else
                {
                    echo '<td>PM</td>';
                }
            }
        }
        echo '</tr>';
        $jmax=0;

        for($i=0; $i<12; $i++)
        {
            if($array[$i] == 1)
            {
                $jmax++;
            }
        }
        $heure = 0;
        $ajoutheure = 0;
        $minute = 0;
        $ampm = 0;
        $arraytemp = $array;
        
        for($i=0; $i<13; $i++)
        {
            echo '<tr>';
            $arraytemp = $array;
            for($j=0; $j<$jmax; $j++)
            {
                //Heure
                $unefois = false;
                $button = false;
                $temp;
                for($t=0; $t<12; $t++)
                {
                    if($arraytemp[$t] == 1 && $unefois == false)
                    {
                        $arraytemp[$t] = 0;
                        $unefois = true;
                        $temp = $t;
                        $ampm = $t%2;
                    }
                }
                if($ampm == 0)
                {
                    $heure = 9 + $ajoutheure;
                }
                else
                {
                    $heure = 14 + $ajoutheure;
                }
                echo '<td';                
                $sql = "SELECT * FROM `rdv` WHERE `c_id` =" . $c_id . " and `ligne` =" . $i . " and `colonne` =" . $j . " ;";
                $result = mysqli_query($db_handle, $sql);

                $deuxfois = false;
                if($heure == 12 || $heure == 13)
                {
                    echo ' class="manger">';
                    $deuxfois = true;
                }
                if($deuxfois == false)
                {
                    if (mysqli_num_rows($result) == 0)
                    {
	                    echo '><input type="button" class="dispo"';
                        $button = true;
                    }
                    else
                    {
                        while ($data = mysqli_fetch_array($result))
                        {
                            if($data[8] == 1)
                            {
                                echo ' class="reserve">';
                            }
                            else
                            {
                                echo'><input type="button" class="dispo"';
                                $button = true;
                            }
                        }
                    }
                }
                if($button == true)
                {
                    if($minute == 0)
                    {
                        echo ' value="' . $heure . ':00" onclick="priseRDV(' . $i . ', ' . $j . ', ' . $temp . ', ' . $c_id . ')" />';
                    }
                    else
                    {
                        echo ' value="' . $heure . ':' . $minute . '" onclick="priseRDV(' . $i . ', ' . $j . ', ' . $temp . ', ' . $c_id . ')" />';
                    }
                }
                else
                {
                    echo $heure;
                    if($minute == 0)
                    {
                        echo ':00';
                    }
                    else
                    {
                        echo ':' . $minute;
                    }
                    echo '</td>';
                }
            }
            $minute = $minute + 20;
            if($minute == 60)
            {
                $ajoutheure = $ajoutheure + 1;
                $minute = 0;
            }
            echo '</tr>';
        }
        // on convertit la ligne et la colonne du tableau avec les horaires du RDV grace au fichier js
        echo '</table>';
        echo "<form action='rdvpris.php?mID=$mID&spe=$spe' method='post'>";
        echo '<div id="jour" ></div>';
        echo '<div id="horaire" ></div>';
        echo '<input type="hidden" id="jo" name="jour"></div>';
        echo '<input type="hidden" id="ho" name="horaire"></div>';
        echo '<input type="hidden" id="ligne" name="ligne" />';
        echo '<input type="hidden" id="colonne" name="colonne" />';
        echo '<input type="hidden" id="c_id" name="c_id" />';
        echo '
        <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 my-4 py-4 text-center">';
        echo "<a class='btn btn-outline-dark btn-lg px-5 mx-2' href='client.php?spe=$spe'>Retour</a>";
        echo '<input class="btn btn-outline-dark btn-lg mx-2" type="submit" value="Prendre rendez-vous" />
        </div>
        </div>';
        echo '</form>';
    }
    ?>

    

</div>

    <!-- Footer-->
    <footer id="footer" class="bg-white">
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Contact</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="text-muted">Téléphone :</a></li>
                        <li class="mb-2"><a class="text-muted">Mail : </a></li>
                        <li class="mb-2"><a class="text-muted">Adresse : </a></li>
                    </ul>
                    <ul class="list-inline mt-4">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Google Map</h6>
                    <div class="iframe-container">
                        <iframe width="300" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=omnes%20education&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                    <p class="text-muted mb-4">Abonnez-vous pour recevoir des nouveautés de notre site par mail !</p>
                    <div class="p-1 rounded border">
                        <div class="input-group">
                            <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light py-4">
            <div class="container text-center">
                <p class="text-muted mb-0 py-2">Copyright © Projet Piscine 2022</p>
            </div>
        </div>
    </footer>
</body>
</html>