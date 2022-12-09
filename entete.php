<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="container">
    <div>
        <nav class="navbar navbar-expand-sm bg-success">
            <form action = "entete.php" method = "get" >
            <input type="texte" placeholder="Saisir un auteur..."name="nom"size="60">
            <input type="submit" name="rechercher" value="rechercher">
            </form>
            <img src="image/logo.jpg"height="60"> 
        </nav>
    </div>

 <?php
    if (isset($_REQUEST["rechercher"])){
        require_once('connexion.php');
        $nom = $_GET['nom'];
        $select = $connexion->prepare ("SELECT titre FROM auteur, livre WHERE auteur.noauteur = livre.noauteur and auteur.nom=:nom");
        $select->bindValue(":nom",$nom);
        $select->setFetchMode(PDO::FETCH_OBJ);
        $select->execute();
          while($enregistrement = $select->fetch())
        {
          echo '<h6>'.$enregistrement->titre.'</h6>';
        }
      }
 ?>
</body>


