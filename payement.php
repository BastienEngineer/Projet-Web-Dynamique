<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payer</title>
</head>
<body>
    <form action="validerPayement.php" method="post">
        <table border="1">
        <tr>
            <td colspan="2" align="center">
            Payer votre seance
            </td>
        </tr>
        <tr>
        <td>Type de carte de paiement</td>
            <td>
            <input type="radio" id="1" name="carte" value="1">
            <label for="1">Visa</label><br>
            <input type="radio" id="2" name="carte" value="2">
            <label for="2">MasterCard</label><br>
            <input type="radio" id="3" name="carte" value="3">
            <label for="3">American Express</label><br>
            <input type="radio" id="4" name="carte" value="4">
            <label for="4">Paypal</label><br>
            </td>
        </tr>
        <tr>
            <td>Numero de votre CB</td>
            <td><input type="text" pattern="[0-9]{16}" name="num"></td>
        </tr>
        <tr>
            <td>Nom de votre CB</td>
            <td><input type="text" pattern="[a-zA-Z]+" name="nom"></td>
        </tr>
        <tr>
            <td>
            <label for="date">Date d expiration</label>
            <td><input type="date" name="date"></td>
            </td>
        </tr>
        <tr>
            <td>Code de securite</td>
            <td><input type="password" placeholder="000" pattern="[0-9]{3}" name="code"></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Payer" name="payer">
        </td>
        </tr>
        </table>
    </form>
</body>
</html>
