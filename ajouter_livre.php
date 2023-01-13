<html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale-1">
        </head>

 <body>
        <?php
                require_once('connexion.php');
                $stmt1 = $connexion->prepare("SELECT * FROM livre"); // on prend tout dans livre
                $stmt1->setFetchMode(PDO::FETCH_OBJ); // on passe en object
                $stmt1->execute(); // on execute 
                $sql="INSERT INTO livre ( noauteur , titre, isbn13 , anneeparution , resume) 
                VALUES(:noauteur,:titre,:isbn13,:anneeparution,:resume)";
                $stmt = $connexion->prepare("INSERT INTO livre (noauteur , titre, isbn13 , anneeparution , resume)
                VALUES(:noauteur,:titre,:isbn13,:anneeparution,:resume)");
                $stmt->bindValue(':noauteur', $_POST["noauteur"], PDO::PARAM_STR);
                $stmt->bindValue(':titre', $_POST["titre"], PDO::PARAM_STR);
                $stmt->bindValue(':isbn13', $_POST["isbn13"], PDO::PARAM_STR);
                $stmt->bindValue(':anneeparution', $_POST["anneeparution"], PDO::PARAM_STR);
                $stmt->bindValue(':resume', $_POST["resume"], PDO::PARAM_STR);
                $stmt->execute();
                $nb_ligne_affectees = $stmt->rowCount();
                echo $nb_ligne_affectees." ligne() insérée(s).<BR>";
        ?> 

 </body>
</html>
