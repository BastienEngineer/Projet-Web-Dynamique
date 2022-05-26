<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="adminTraitement.php" method="post">
        <label for="text">Nom : </label>  
        <input type="text" name="nom"/><br/>
        <label for="text">Prenom : </label>  
        <input type="text" name="prenom"/><br/>
        <div class="custom-file">
        <input type="file" class="custom-file-input" name="file" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
        </div>  
        <label for="text">Specialite : </label>  
        <input type="text" name="spe"/><br/>
        <label for="email">Mail : </label> 
        <input type="email" id="email" name="courrier"/><br/> 
        <label for="text">Bureau (Salle) : </label>  
        <input type="text" name="salle"/><br/>
        <input type="submit" value="Ajouter un coach" name="add">  
        <input type="submit" value="Supprimer un coach" name="delete"> 
    </form>
    <a href="admin.php">Retour</a>
</body>
</html>
 