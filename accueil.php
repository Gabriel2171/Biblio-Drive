<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css">
    <link rel="stylesheet" href="carrousel.css"/>
    <script src="mention-légale/tarteaucitron/tarteaucitron/tarteaucitron.js"></script>
   <script>
    tarteaucitron.init({
      "privacyUrl": "", /* URL de la page de la politique de vie privée */
      "hashtag": "#tarteaucitron", /* Ouvrir le panneau contenant ce hashtag */
      "cookieName": "tarteaucitron", /* Nom du Cookie */
      "orientation": "middle", /* Position de la bannière (top - bottom) */
      "showAlertSmall": true, /* Voir la bannière réduite en bas à droite */
      "cookieslist": true, /* Voir la liste des cookies */
      "adblocker": false, /* Voir une alerte si un bloqueur de publicités est détecté */
      "AcceptAllCta": true, /* Voir le bouton accepter tout (quand highPrivacy est à true) */
      "highPrivacy": true, /* Désactiver le consentement automatique : OBLIGATOIRE DANS l'UE */
      "handleBrowserDNTRequest": false, /* Si la protection du suivi du navigateur est activée, tout interdire */
      "removeCredit": false, /* Retirer le lien vers tarteaucitron.js */
      "moreInfoLink": true, /* Afficher le lien "voir plus d'infos" */
      "useExternalCss": false, /* Si false, tarteaucitron.css sera chargé */
      //"cookieDomain": ".my-multisite-domaine.fr", /* Cookie multisite - cas où SOUS DOMAINE */
      "readmoreLink": "/cookiespolicy" /* Lien vers la page "Lire plus" A FAIRE OU PAS  */
    });
    (tarteaucitron.job = tarteaucitron.job || []).push('youtube');
  </script>
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10"><?php include "entete.php"?></div><!--j'inporte entete.php dans mon accueil -->
        <div class="col-md-2"><img src="image/logo.jpg"height="80" class="img-thumbnail" alt="logo "></div>
    </div>
 
    <div class="row">
  <div class="col-md-9"><?php include "carrousel.php"?></div>
 
<div class="col-md-3"><div class="border border-sucess p-3 mb-3"><?php include "formulaire_pour_utilisateur.php"?></div></div>
</div>
</div>
<div class="youtube_player" videoID="PJCvmeRILLk" width="560" height="315" theme="light" rel="0" controls="1" showinfo="1" autoplay="0"></div>


