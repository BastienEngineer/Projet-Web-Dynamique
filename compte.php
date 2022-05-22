<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
    <form action="connexion.php" method="post">  
        <!-- <label for="email">Login : </label> -->  
        <!-- <input type="email" id="email" name="log"/><br/>   -->
        <label for="text">Login : </label>  
        <input type="text" name="log"/><br/>
        <label for="password">Mot de passe : </label>  
        <input type="password" id="password" name="password"/><br/>
        <input type="submit" value="Se connecter" name="connexion">    
    </form>
</body>
</html>