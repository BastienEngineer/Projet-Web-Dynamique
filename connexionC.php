<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
    <form action="coach.php" method="post">  
        <label for="text">Nom : </label>  
        <input type="text" name="nom"/><br/>
        <label for="text">Prenom : </label>  
        <input type="text" name="prenom"/><br/>
        <label for="email">Mail : </label> 
        <input type="email" id="email" name="courrier"/><br/> 
        <input type="submit" value="Se connecter" name="coach">    
    </form>
</body>
</html>