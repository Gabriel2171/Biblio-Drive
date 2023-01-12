
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css>
  
    <link rel="stylesheet href="carrousel.css"/>
 </head>
 <body>
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-10"><?php include "entete.php"?></div>
    <div class="col-md-2"><img src="image/logo.jpg"height="80" class="img-thumbnail" alt="logo "></div>
    </div>
    </div>
   <?php 

     if (isset($_REQUEST ["rcode"])) 
      { 
        $stmt = $connexion->prepare("SELECT * FROM auteur where nom=:nom");// on selection tout de la tables auteurs 
        $stmt->bindValue(":nom", $_GET["nom"]); // permet d'eviter la concatenation 
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute(); // on execute la requete 
        $enregistrement = $stmt->fetch();
        $stmt2 = $connexion->prepare("SELECT * FROM livre WHERE noauteur = :noauteur");
        $stmt2->bindValue(":noauteur", $enregistrement->noauteur);
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $stmt2->execute();
        echo '<h2>Vous recherchez : '.$enregistrement->prenom.' '.$enregistrement->nom.'</h2>';
        while($enregistrement2 = $stmt2->fetch())
     {
      echo '<a href="detail.php?nolivre=',$enregistrement->nolivre, '">', $enregistrement->titre, ' </a><br>'; // on va transferer le resultat de la requete dans le fichier détail.php
     }
      }        
    ?>
 
    <div class="col-md-3"><div class="border border-sucess p-3 mb-3"><?php include "formulaire.php"?></div></div>
    </div>
    </div>
  </body>

</html>
