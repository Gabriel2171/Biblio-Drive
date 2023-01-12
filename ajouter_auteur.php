<html lang="fr">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
</head>
<body>
    <?php
            require_once('connexion.php');
            $stmt1 = $connexion->prepare("SELECT * FROM auteur");
            $stmt1->setFetchMode(PDO::FETCH_OBJ);
            $stmt1->execute();
            $sql="INSERT INTO auteur (noauteur, nom, prenom) 
            VALUES(:noauteur, :nom, :prenom)";
            $stmt = $connexion->prepare("INSERT INTO auteur (noauteur, nom, prenom)
            VALUES(:noauteur, :nom, :prenom)");
            $stmt->bindValue(':noauteur', $_POST["noauteur"], PDO::PARAM_STR);
            $stmt->bindValue(':nom', $_POST["nom"], PDO::PARAM_STR);
            $stmt->bindValue(':prenom', $_POST["prenom"], PDO::PARAM_STR);
            $stmt->execute();
            $nb_ligne_affectees = $stmt->rowCount();
            echo $nb_ligne_affectees." ligne() insérée(s).<BR>";
    ?> 
