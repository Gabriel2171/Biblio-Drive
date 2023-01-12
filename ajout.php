<html lang="fr">
<head>
    <title> Titre de Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
</head>

<body>
    ajt admin
    <?php
        require_once('connexion.php');
        $stmt1 = $connexion->prepare("SELECT * FROM auteur");
        $stmt1->setFetchMode(PDO::FETCH_OBJ);
        $stmt1->execute();
    ?>

<form action="ajouter_auteur.php" method="post">
noauteur: <input type="text" name="noauteur" /><br>
nom: <input type="text" name="nom" /><br>
prenom: <input type="text" name="prenom" /><br>

<input type="submit" />
</form>

    ajt livre
    <?php
        require_once('connexion.php');
        $stmt1 = $connexion->prepare("SELECT * FROM livre");// on selectionne tout les livre 
        $stmt1->setFetchMode(PDO::FETCH_OBJ);
        $stmt1->execute();
    ?>

<form action="ajouter_livre.php" method="post">
noauteur: <input type="text" name="noauteur" /><br>
titre: <input type="text" name="titre" /><br>
isbn13: <input type="text" name="isbn13" /><br>
anneeparution: <input type="text" name="anneeparution" /><br>
resume: <input type="text" name="resume" /><br>

<input type="submit" />
</form>

 ajt auteur
    <?php
        require_once('connexion.php');
        $stmt1 = $connexion->prepare("SELECT * FROM utilisateur");// on selectionne tout les auteurs
        $stmt1->setFetchMode(PDO::FETCH_OBJ);
        $stmt1->execute();
    ?>

<form action="ajouter_membre.php" method="post">
nom: <input type="text" name="nom" /><br>
prenom: <input type="text" name="prenom" /><br>
mel: <input type="text" name="mel" /><br>
ville : <input type="text" name="ville" /><br>
codepostal: <input type="text" name="codepostal" /><br>
adresse: <input type="text" name="adresse" /><br>

<input type="submit" />
</form>

</body>
</html>