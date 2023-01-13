
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css>
    <title>Document</title>
    <link rel="stylesheet href="carrousel.css"/>
    <h4>Dernière acquisitions</h4>
</head>
<body>
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> <!-- Carroussel  -->
 <div class="carousel-inner"> 
<?php 
 require_once('connexion.php');
$select = $connexion->prepare("SELECT image, nolivre FROM livre ORDER BY dateajout DESC LIMIT 2"); // Contenu du caroussel
$select->setFetchMode(PDO::FETCH_OBJ);
$select->execute();
 if($enregistrement = $select->fetch())
 {
echo '<div class="carousel-item active">';
echo'<img class="d-block w-200" src='.$enregistrement->image.'>';  
echo '</div>'; 
 } 
 while($enregistrement = $select->fetch()){
echo '<div class="carousel-item">';
echo'<img class="d-block w-200" src='.$enregistrement->image.'>';
echo '</div>';
}
 ?>
 </div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <!-- Flèches du caroussel -->
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
 </a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span>
</a>
 </div>
</body>
</html>