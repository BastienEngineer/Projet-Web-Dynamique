<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation d un client</title>
</head>
<body>
    <form action="AjoutClient.php" method="post">
        <table border="1">
        <tr>
            <td colspan="2" align="center">
            Creation d un client
            </td>
        </tr>        
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Mail</td> 
            <td><input type="email" name="courrier"></td> 
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type="password" name="mdp"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><input type="text" name="adresse"></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type="text" name="ville"></td>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td><input type="text" pattern="[0-9]{5}" name="code"></td>
        </tr>
        <tr>
            <td>Pays</td>
            <td><input type="text" name="pays"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input type="text" pattern="[0-9]{10}" name="tel"></td>
        </tr>
        <tr>
            <td>Carte Etudiante</td>
            <td><input type="text" name="carte"></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Creer votre compte" name="creation">
        </td>
        </tr>
        </table>
    </form>
</body>
</html>
