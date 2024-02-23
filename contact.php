<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <span></span>
</head>

<body>
    <table>
    <form action="contact.php" method="">
        <tr>
            <th><label for="nom">Nom:</label></th>
            <th><input type="text" id="nom" name="nom" ></th>
        </tr>

        <tr>
            <th><label for="prenom">Prenom:</label></th>
            <th><input type="text" id="prenom" name="prenom" ></th>
        </tr>

        <tr>
            <th><label for="email">Email:</label></th>
            <th><input type="email" id="email" name="email" ></th>
        </tr>
        
        <tr>
            <th><label for="number">Téléphone:</label></th>
            <th><input type="number" id="tel" name="tel" ></th>
        </tr>
        
        <tr>
            <th><label for="adresse">Adresse:</label></th>
            <th><input type="text" id=adresse name="adresse" ></th>
        </tr>
        
        <tr>
            <th><label for="code_poste">Code Postal:</label></th>
            <th><input type="number" id="code" name="code" ></th>
        </tr>
        
        <tr>
            <th><input type="submit" value="Envoyer"></input></th>
            <th><input type="reset" value="Annuler"></input></th>
        </tr>
        
    </form>    
    </table>
</body>

</html>

<html>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <th><?php echo $_GET["nom"] ;?></th>
            <th><?php echo $_GET["prenom"];?></th>
            <th><?php echo $_GET["email"];?></th>
            <th><?php echo $_GET["tel"];?></th>
            <th><?php echo $_GET["adresse"];?></th>
            <th><?php echo $_GET["code"];?></th>
        </tr>
    </table>
</html>
<?php      
    $name=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $mail=$_GET["email"];
    $num=$_GET["tel"];
    $adresse=$_GET["adresse"];
    $postal=$_GET["code"];
    if(empty ($name) || empty ($prenom) || empty($mail) ||empty($num) || empty($adresse) || empty($postal))
    {
        echo "<span>Remplir tous le
        s champs </span> " ;
    }

?>