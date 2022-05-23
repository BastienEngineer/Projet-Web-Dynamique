<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
    <form action="client.php" method="post">  
        <label for="email">Mail : </label> 
        <input type="email" id="email" name="courrier"/><br/> 
        <label for="password">Mot de passe : </label>  
        <input type="password" id="password" name="motdepasse"/><br/>
        <input type="submit" value="Se connecter" name="client">    
    </form>
</body>
</html>