<?php
$prenomCV=$_GET["p"];
$xmldata = simplexml_load_file("xml/$prenomCV.xml") or die("Failed to load");
foreach($xmldata->children() as $cv) {         
    echo $cv->prenom . '<br>';  
    echo $cv->formation . '<br>';    
    echo $cv->experience . '<br>'; 
} 
?>