<!DOCTYPE html>
<html lang="fr">
    <form action="authentification.php" method="post">
        <h4>Se connecter</h4>
        identifiant<input type="text" name="prenom">
        mot_de_passe<input type="text" name="mot_de_passe">
       <input type="submit"value="connexion"name="ok">
</from>
<?php
     if (isset($_REQUEST ["ok"])) {
        require_once('connexion.php');
        try {
        $identifiant = $_REQUEST['identifiant'];
        $mot_de_passe = $_REQUEST['mot_de_passe'];
        $requete = "INSERT INTO utilisateur(nom, prenom, mel, mot_de_passe) VALUES('".$identifiant."','".$mot_de_passe."')";
        echo $requete;
        $nombreDeInsertion = $connexion->exec($requete);
        echo $nombreDeInsertion, " ligne(s) a(ont) été insérée(s).";
        } catch (Exception $e) {
        echo "Une erreur est survenue lors de l'insertion.";
        }
     }
?>
</html>