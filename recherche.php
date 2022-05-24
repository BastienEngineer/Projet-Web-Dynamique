<?php  
 $connect = mysqli_connect("localhost", "root", "", "omnes");  
 $query ="SELECT * FROM coach ORDER BY cID DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html>
<head>
    <title>Projet Piscine</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">	
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<style>
table 
{
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}
</style>


<div class="container-fluid">  
<h3 align="center">Recherche</h3>  
<br />  
<div class="table-responsive">  
<table id="coachlist" class="table table-striped table-bordered" style="width:100%">  
    <thead>  
        <tr>  
            <td>Nom</td>  
            <td>Prenom</td>  
            <td>Photo</td>  
            <td>Spécialité</td>  
            <td>Mail</td>  
            <td>Bureau</td> 
        </tr>  
    </thead>
    <?php  
    while($row = mysqli_fetch_array($result))  
    {  
    $image = $row['Photo'];

            echo
           '<tr>  
            <td>'.$row["Nom"].'</td>  
            <td>'.$row["Prenom"].'</td>';
            echo "<td>" ."<img src='$image' height='80' width='120'>" . "</td>";
            echo '  
            <td>'.$row["Specialite"].'</td>  
            <td>'.$row["Mail"].'</td>  
            <td>'.$row["Bureau"].'</td>  
            </tr>';  
    }  
    ?>  
</table>  
</div>  
</div>  
<script>  
$(document).ready(function () {
    $('#coachlist').DataTable({
        paging: false,
        ordering: false,
        info: false,
    });
});  
 </script> 
</body>
</html>