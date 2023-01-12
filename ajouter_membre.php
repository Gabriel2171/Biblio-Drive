<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
</head>
<body>
  <?php
            require_once('connexion.php');
            $stmt1 = $connexion->prepare("SELECT * FROM utilisateur");
            $stmt1->setFetchMode(PDO::FETCH_OBJ);
            $stmt1->execute();
            $sql="INSERT INTO utilisateur (nom , prenom , mel, ville , codepostal , adresse) 
            VALUES(:nom , :prenom , :mel, :ville , :codepostal , :adresse)";
            $stmt = $connexion->prepare("INSERT INTO utilisateur (nom , prenom , mel, ville , codepostal , adresse)
            VALUES(:nom , :prenom , :mel, :ville , :codepostal , :adresse)");
                $stmt->bindValue(':nom', $_POST["nom"], PDO::PARAM_STR);
                $stmt->bindValue(':prenom', $_POST["prenom"], PDO::PARAM_STR);
                $stmt->bindValue(':mel', $_POST["mel"], PDO::PARAM_STR);
                $stmt->bindValue(':ville', $_POST["ville"], PDO::PARAM_STR);
                $stmt->bindValue(':codepostal', $_POST["codepostal"], PDO::PARAM_STR);
                $stmt->bindValue(':adresse', $_POST["adresse"], PDO::PARAM_STR);
                $stmt->execute();
            $nb_ligne_affectees = $stmt->rowCount();
            echo $nb_ligne_affectees." ligne() insérée(s).<BR>";
        ?> 
</body>
</html>