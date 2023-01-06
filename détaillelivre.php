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
      <div class="col-sm-3"><img src="image/logo.jpg" align="RIGHT" class="img-thumbnail" alt="logoimg" style="width:450px;height:250px;"></div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-3">
        <?php
            if(!empty($_REQUEST['icode']))
            {
                $stmt = $connexion->prepare("SELECT * FROM livre where image=:image"); // n vien prendre tout de la tables livre pour pouvoir afficher ce que l'on veut.
                $stmt->bindValue(":image", $_REQUEST["icode"]);
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                $stmt->execute();
                $enregistrement = $stmt->fetch();
                $stmt2 = $connexion->prepare("SELECT * FROM auteur WHERE noauteur = :noauteur");
                $stmt2->bindValue(":noauteur", $enregistrement->noauteur);
                $stmt2->setFetchMode(PDO::FETCH_OBJ);
                $stmt2->execute();
                $enregistrement2 = $stmt2->fetch();
                echo '<h5>ISBN13 : '.$enregistrement->isbn13.'</h5>';
                echo '<h5>Auteur : '.$enregistrement2->prenom.' '.$enregistrement2->nom.'</h5>';
                echo '<img src="'.$enregistrement->image.'" class="les miserables" name="imageavecdescription" id="image" style="width:400px;height:500px;">';
            }
            else
            {
                echo "";
            }
        ?>
        </div>
        <div class="col-sm-6">
        <?php
        if(!empty($_REQUEST['icode']))
        {
            $stmt = $connexion->prepare("SELECT * FROM livre where image=:image");
            $stmt->bindValue(":image", $_REQUEST["icode"]);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $enregistrement = $stmt->fetch();
            echo '<br><br><br>';
            echo '<h2>Résumé de : '.$enregistrement->titre.'</h2>';
            echo '<p>'.$enregistrement->resume.'</p>';
            if(!empty($_SESSION['permission']))
            {
              if($_SESSION['permission'] == "user")
              {
                echo '<br><form action="panier.php" method="POST">
                <button type="submit" class="btn btn-primary" id="reserv" name="reserv" value='.$enregistrement->isbn13.'>
                Emprunter (ajout au panier)
                </button>
                </form>';
              }
              else
              {
                echo "<br><h4>Pour réserver vous devez posséder un compte membre</h4>";
              }
            }
            else
            {
              echo "<br><h4>Pour réserver vous devez posséder un compte membre</h4>";
            }
        }
        else
        {
            echo "";
        }
        ?>
      </div>
      <div class="col-sm-3">
        <div class="border border-success p-3 mb-3">
           <?php include "formulaire.php"?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
