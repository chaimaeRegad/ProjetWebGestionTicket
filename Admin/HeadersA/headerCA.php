
<!doctype html>
<html>

<head>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A9A9A9 ;position:relative;">
  <a class="navbar-brand" href="https://www.3il-ingenieurs.fr/"><img width="170px" class="img-fluid" src="Images/Logo3il.png"/></a>
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
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="color:white ;background-color: rgba(0, 0, 0, 0.2)">
  Se connecter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connectez vous sans plus tarder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<script type='text/javascript'>

function getXhr(){
                                var xhr = null; 
                if(window.XMLHttpRequest) // Firefox et autres
                   xhr = new XMLHttpRequest(); 
                else if(window.ActiveXObject){ // Internet Explorer 
                   try {
                            xhr = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                }
                else { // XMLHttpRequest non supporté par le navigateur 
                   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
                   xhr = false; 
                } 
                                return xhr;
            }



  function go(){
                  var xhr = getXhr();
                  // On définit ce qu'on va faire quand on aura la réponse


       // Ici on va voir comment faire du post
       xhr.open("POST","./TraitementA/ConnexionA.php",true);
                  // ne pas oublier ça pour le post
       xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                  xhr.onreadystatechange = function(){
                      // On ne fait quelque chose que si on a tout reçu et que le serveur est OK
                      if(xhr.readyState == 4 && xhr.status == 200){
                          leselect = xhr.responseText;
                             var i=String(leselect)      
                             if(i==2){

                              window.location.href = "./TicketAdmin/AffichTicketAdmin.php"

                             }else{
                                // On se sert de innerHTML pour rajouter les options à la liste
                                document.getElementById('err').innerHTML = leselect;
                             }
                                     
                          
                            
 

                      }

                  }
  
           
                  // ne pas oublier de poster les arguments
                  // ici, l'id de l'auteur
                  eemail= document.getElementById('exampleInputEmail1').value;
                  ppassword = document.getElementById('exampleInputPassword1').value;
                  xhr.send("email="+eemail+"&password="+ppassword);
                  
   }



</script>




<form >

  <div class="form-group">
    <label for="exampleInputEmail1">Address Email </label>
    <input type="email" name="email" style="width:250px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mots de passe</label>
    <input type="password" name="password" style="width:250px" class="form-control" id="exampleInputPassword1" placeholder="Password">
    
    <div id="err">
    
    </div>

  </div>


  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" onclick="go()">Se connecter</button>
    </div>


</form>


      </div>
      
    </div>
  </div>
</div>
    </span>
  </div>
</nav>

</body>
</html>