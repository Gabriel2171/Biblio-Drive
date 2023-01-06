<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css>
    <title>Document</title>
    <link rel="stylesheet href="carrousel.css"/>
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10"><?php include "entete.php"?></div>
        <div class="col-md-2"><img src="image/logo.jpg"height="80" class="img-thumbnail" alt="logo "></div>
    </div>
 
    <div class="row">
  <div class="col-md-9"> <br>
  <h6>Dernieres acquisitions <h6>
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/le feuilleton d'hermes.jpg" class="d-block w-100" alt="le feuilleton d'hermes" style="width:100px;height:600px;">
          </div>
          <div class="carousel-item">
          <img src="image/tret.jpg"class="d-block w-100" alt="les miserables" style="width:100px;height:600px;">
          </div>
          <div class="carousel-item">
          <img src="image/tourdumonde.jpg" class="d-block w-100" alt="tourdumonde"style="width:100px;height:600px;">
          </div>
          <div class="carousel-item">
          <img src="image/Voyage au centre de la terre.jpg" class="d-block w-100" alt="Voyage au centre de la terre"style="width:100px;height:600px;">
          </div>
        
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
         </button>
    </div>
 </div>
</div>

<div class="col-md-3"><div class="border border-sucess p-3 mb-3"><?php include "formulaire.php"?></div></div>
</div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    