<?php
session_start();
?>
<!doctype html>
<html lang="fr">
 <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
 </head>

 <body>
  <?php require_once('connexion.php'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9">
        <?php include "entete.php"?>
      </div>
      <div class="col-sm-3"><img src="image/logo.jpg" align="RIGHT" class="img-thumbnail" alt="logoimg" style="width:300px;height:250px;"></div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-9">
        <?php
            require_once('connexion.php');
            $numero = $_GET['numerolivre'];
            $select = $connexion->prepare("SELECT * FROM  livre WHERE livre.nolivre=:nolivre"); //requete ou on va aller chercher dans livre le nolivre 
          $select->bindValue(":nolivre",$numero); // eviter le concatenation 
          $select->setFetchMode(PDO::FETCH_OBJ);
          $select->execute(); // on execute la requete 
          $enregistrement = $select->fetch();
          echo'<h5>Titre :</h5><p> '.$enregistrement->titre.'</p><br><h5> Resumer :</h5></p> '.$enregistrement->resume.'<br></p><img class="img" src="'.$enregistrement->image.'">'; // on va afficher dans notre page les requete
        ?>
      </div>
      <div class="col-sm-3">
        <div class="border border-success p-3 mb-3">
           <?php include "formulaire_pour_utilisateur.php"?>
        </div>
      </div>
    </div>
 </div>
  </div>
 </body>
</html>

