<!doctype html>
<html lang="fr" style="height:100% " >
<head>
  <title>Page d'acceuil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheet.Css">
  <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body style="height:100%">

<?php
include("Headers/headerC.php");
?>



<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel" style=" height:65%; position:relative" >
    <div class="carousel-inner">

    <div class="carousel-item container active" style="items-align:center">
        
      

        <div class="row align-items-center"style=" height:70vh; width:100vw" >

        <div class="col-5 text-center" style="width:50vw; margin-left:50px" >
        
        <img src="Images/jettezNouri.jpg" style=" height:280px;width:320px; box-shadow: 8px 8px 12px #aaa; " >

        </div>
       
        <div class="col-5  " style="margin-left:-50px">
                <h5 style="color:black !important">Presentation Globale du site</h5>
                <p>Bienvenue dans le site de gestion des plainte relier au foyer, ici vous aller pouvoir exprimer vos mecontentement et l'equipe de gestion s'occupera de corriger ces desagrement</p>
        </div>

        <div class="col " >
                
        </div>
        

        </div>

        
        </div>
        <div class="carousel-item container" style="items-align:center">
        
      

        <div class="row align-items-center"style=" height:70vh; width:100vw" >

        <div class="col-5 text-center" style="width:50vw; margin-left:50px" >
        
        <img src="Images/ClientInsatisfait.jpg" style=" height:280px;width:320px; box-shadow: 8px 8px 12px #aaa; " >

        </div>
       
        <div class="col-5  " style="margin-left:-50px">
                <h5 style="color:black !important">Espaces Dedier a vous les utilisateurs etudiant</h5>
                <p>Ici pas de tabou, le pain ne vous plait pas ? pas d'inquietude, il vous suffit de vous connecter avec votre adresse email de l'ecole et mots de passe et vous aller pouvoir crée des tickets expriment vos mecontentement</p>
        </div>

        <div class="col " >
                
        </div>
        

        </div>

        
        </div>
        <div class="carousel-item container" style="items-align:center">
        
      

        <div class="row align-items-center"style=" height:70vh; width:100vw" >

        <div class="col-5 text-center" style="width:50vw; margin-left:50px" >
        
        <img src="Images/GestionnaireF.jpg" style=" height:280px;width:320px; box-shadow: 8px 8px 12px #aaa; " >

        </div>
       
        <div class="col-5  " style="margin-left:-50px">
                <h5 style="color:black !important">Espaces Dedier a vous les administrateurs du foyer</h5>
                <p>ici vous allez pouvoir une fois connecté visualiser les differents tickets deposé par les etudiants choisir lequel voulez vous prendre en charge et y repondre a l'etudiant </p>
        </div>

        <div class="col " >
                
        </div>
        

        </div>

        
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <ol class="carousel-indicators row align-items-end">
        <li style="background-color:black" data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li style="background-color:black" data-target="#myCarousel" data-slide-to="1"></li>
        <li style="background-color:black"data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    </div>  
</div>

<?php
include("Footers/footer.php");
?>



</body>



</html>