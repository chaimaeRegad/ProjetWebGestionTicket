


<script>

$("body").delegate("#deconnection", "click", function(){
      

      $.ajax({
          url: '../Traitement/Deconnexion.php',
          type: 'get',
          success: function(response){
            
            window.location.assign("../index.php")



      }
      
      
      });
      
      
      
          
              });
              
</script>

<!doctype html>
<html>

<head>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #A9A9A9 ">
  <a class="navbar-brand" href="https://www.3il-ingenieurs.fr/"><img width="170px" class="img-fluid" src="../Images/Logo3il.png"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"  href="#">Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">A props</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Aide</a>
      </li>
    </ul>
    <span class="navbar-text">
     <!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalD" style="color:white ;background-color: rgba(0, 0, 0, 0.2)">
  Deconnexion
</button>

<!-- Modal -->



    </span>
  </div>
</nav>

</body>



</html>