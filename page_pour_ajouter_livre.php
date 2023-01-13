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
Ajt Livre
    <?php
        require_once('connexion.php');
        $stmt1 = $connexion->prepare("SELECT * FROM livre");// on selectionne tout les livre 
        $stmt1->setFetchMode(PDO::FETCH_OBJ);
        $stmt1->execute();
    //formulaire
echo '<form action="ajouter_livre.php" method="post">';
        $stmt3 = $connexion->prepare("SELECT * FROM auteur");
        $stmt3->setFetchMode(PDO::FETCH_OBJ);
        $stmt3->execute();
        echo "<select class='form-control' name='noauteur'>";
        while($enregistrement3 = $stmt3->fetch())
     {
        echo "<option value='$enregistrement3->noauteur'>$enregistrement3->nom</option>";
     }
     echo "</select>";
     ?><br>
Titre: <input type="text"placeholder="(saisir le titre )"class="form-control" name="titre" /><br>
Isbn13: <input type="text"placeholder="(saisir l'isbn13 )"class="form-control" name="isbn13" /><br>
Anneeparution: <input type="text"placeholder="(saisir le anneeparution )"class="form-control" name="anneeparution" /><br>
Resume: <input type="text"placeholder="(saisir le resumer )"class="form-control" name="resume" /><br>

<input type="submit" />




</div>
</div>
</div>
</form>
</body>
</html>

