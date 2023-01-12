<html lang="fr">
<head>
    <title> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10"><?php include "entete.php"?></div><!--j'inporte entete.php dans mon accueil -->
        <div class="col-md-2"><img src="image/logo.jpg"height="80" class="img-thumbnail" alt="logo "></div>
    </div>
    <div class="row">
    <div class="col-md-5">
        </form>
        Ajouter Membre
            <?php
                require_once('connexion.php');
                $stmt1 = $connexion->prepare("SELECT * FROM utilisateur");// on selectionne tout les auteurs
                $stmt1->setFetchMode(PDO::FETCH_OBJ);
                $stmt1->execute();
            ?>
        <form action="ajouter_membre.php" method="post">
        nom: <input type="text" placeholder="(saisir le nom )"class="form-control" name="nom" /><br>
        prenom: <input type="text" placeholder="(saisir le prenom )"class="form-control" name="prenom" /><br>
        mel: <input type="text" placeholder="(saisir le mel )"class="form-control" name="mel" /><br>
        ville : <input type="text" placeholder="(saisir le ville )"class="form-control" name="ville" /><br>
        codepostal: <input type="text"placeholder="(saisir le codepostal)"class="form-control" name="codepostal" /><br>
        adresse: <input type="text"placeholder="(saisir l' adresse )"class="form-control" name="adresse" /><br>
        <input type="submit" />
</div>
</div>
</div>
</form>
</body>
</html>