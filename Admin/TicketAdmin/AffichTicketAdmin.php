<?php

session_start();
if($_SESSION['role']!="A"){

    header('location: ../../index.php');
}

  ?>

<!doctype html>
<html lang="fr" style="height:100% " >
<head>
  <title>Page d'acceuil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheet.Css">
  <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</head>
<script type='text/javascript'>



window.onload = go;

function goo(){
  ttitre=document.getElementById('exampleInputTitre').value;
  ddescription=document.getElementById('exampleFormControlTextarea1').value;
eetat="ouvert";
RReponse="";
var today = new Date();
var date = today.getFullYear()+'-0'+(today.getMonth()+1)+'-0'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var DDateO = date+' '+time;
DDateF="0000-00-00 00:00:00";

  $(document).ready(function(){ 

    $.ajax({
        url: '../Traitement/AddTicket.php',
        type: 'get',
        data: { 
    titre: ttitre, 
    description: ddescription, 
  },
        success: function(response){
          
          go();


    }


  });

});

}


function go(){

$(document).ready(function(){ 
    $.ajax({
        url: '../TraitementA/AfficheTicketsAdmin.php',
        type: 'get',
        dataType: 'json',
        success: function(response){

     var len = response.length;
    
      for(var i=0; i<len; i++){

       var id = response[i].id;
    var titre = response[i].titre;
     var description = response[i].description;
    var Reponse = response[i].reponse;
    var etat = response[i].etat;
    var DateO = response[i].DateO;
    var DateF = response[i].DateF;
    var AdminID = response[i].AdminID;

    if(etat=="ouvert"){
      $( "#Pere" ).prepend( 
        "<li class='list-unstyled' id='unticket"+id+"'>"+
                "<div class='shadow p-4 mb-3 mt-3 bg-white rounded'>"+
                "<div class='row'>"+
                        "<div class='col' style='font-size:11px'>"+
                        "<p> <span style='font-weight:bold;font-size:14px'> Titre :</span> <span id='titre' style=' font-style:italic'>"+titre +"</span> </p>"+
                        "</div> "+  
                        "<div class='col'  style='font-size:11px'>"+
                        "<p id='Etat"+id+"'> <span style='font-weight:bold;font-size:14px;'> Etat :</span> <span  style='color: red '>"+etat+"</span> </p>"+
                
                        "</div>   "+

                        "<div class='col-3' style='font-size:11px;'>"+
                        "<p> <span style='font-weight:bold;'> Date ouverture :</span> <span style='color:#A0A0A0; font-style:italic;font-size:10px;'>"+DateO +"</span> </p> "+
                
                       " </div>  "+
                        "<div class='col-3' style='font-size:11px'>"+
                       "<p><span style='font-weight:bold;'> Date fermeture :</span> <span style='color:#A0A0A0; font-style:italic'>"+DateF+"</span> </p> "+
                                 
                                
                
                        "</div> "+


                        "<div class='col text-center' style='font-size:11px'>"+
                        
  
                        "<a  data-toggle='modal' data-id="+id+" id='myBtn'><img width='40px' class='img-fluid' src='../Images/soccuper.jpg'/></a>"+
                

                        "</div> "+
                
              "</div> "+ 
               " <div class='row'>"+
               " <div class='' style='font-size:13px; width:90%'>"+
               " <div style='height:60px; word-wrap: break-word;'><p >  <span  style='font-weight:bold;font-size:16px;'> Message :</span><span id='message' > "+ description +" </span> </div>"+
                                 
                
                "</div> "+
                
                "</div>  "+ 
                "<div class='row'>"+
               " <div class style='font-size:13px;  width:90%'>"+
                "<div style='height:60px; word-wrap: break-word;'><p> <span  style='font-weight:bold;font-size:16px'> Reponse :</span><span id='reponse'>"+Reponse+" </span></p></div>"+
                    
                
                       " </div> "+
                
                "</div>  "+     
                "</div>"+
        "</li>" ); 


        $("body").delegate("#myBtn", "click", function(){
             var id=$(this).attr('data-id');
           $("#delete").attr("onclick","soccuper("+id+")");

        $("#myModal")

          $("#myModal").modal();

});
      
      }else if(etat=="En traitement" && AdminID=="this"){


        $( "#Pere" ).prepend( "<li class='list-unstyled' id='unticket'>"+
                "<div class='shadow p-4 mb-3 mt-3 bg-white rounded'>"+

                "<div class='row'>"+
                        "<div class='col' style='font-size:11px'>"+
                        "<p> <span style='font-weight:bold;font-size:14px'> Titre :</span> <span id='titre' style=' font-style:italic'>"+titre +"</span> </p>"+
                        "</div> "+  
                        "<div class='col' style='font-size:11px'>"+
                        "<p> <span style='font-weight:bold;font-size:14px;'> Etat :</span> <span id='' style='color: red '>"+etat+"</span> </p>"+
                
                        "</div>   "+

                        "<div class='col-3' style='font-size:11px;'>"+
                        "<p> <span style='font-weight:bold;'> Date ouverture :</span> <span style='color:#A0A0A0; font-style:italic;font-size:10px;'>"+DateO +"</span> </p> "+
                
                       " </div>  "+
                        "<div class='col-3' style='font-size:11px'>"+
                       "<p><span style='font-weight:bold;'> Date fermeture :</span> <span style='color:#A0A0A0; font-style:italic'>"+DateF+"</span> </p> "+
                                 
                              
                        "</div> "+

                        "<div class='col text-center' style='font-size:11px'>"+

                    "<a  data-toggle='modal' data-id="+id+" id='editerR'><img width='30px' class='img-fluid' src='../Images/editer.png'/></a>"+
                   
                    "</div> "+
                                  
                        

                
              "</div> "+ 
               " <div class='row'>"+
               
               " <div class='' style='font-size:13px; width:90%'>"+
               " <div style='height:60px; word-wrap: break-word;'><p >  <span  style='font-weight:bold;font-size:16px;'> Message :</span><span id='message' > "+ description +" </span> </div>"+
                                 
                
                "</div> "+
                
                "</div>  "+ 
                "<div class='row'>"+
               " <div class style='font-size:13px;  width:90%'>"+
                "<div style='height:60px; word-wrap: break-word;'><p> <span  style='font-weight:bold;font-size:16px'> Reponse :</span><span id='reponse'>"+Reponse+" </span></p></div>"+
                    
                
                       " </div> "+
                
                "</div>  "+     
                "</div>"+
        "</li>" );

        $("body").delegate("#editerR", "click", function(){
             var id=$(this).attr('data-id');
           $("#editerRM").attr("onclick","editerRR("+id+")");

           $("#myModal1")

          $("#myModal1").modal();

        });

      }else{



        $( "#Pere" ).prepend( "<li class='list-unstyled' id='unticket'>"+
                "<div class='shadow p-4 mb-3 mt-3 bg-white rounded'>"+

                "<div class='row'>"+
                        "<div class='col' style='font-size:11px'>"+
                        "<p> <span style='font-weight:bold;font-size:14px'> Titre :</span> <span id='titre' style=' font-style:italic'>"+titre +"</span> </p>"+
                        "</div> "+  
                        "<div class='col' style='font-size:11px'>"+
                        "<p> <span style='font-weight:bold;font-size:14px;'> Etat :</span> <span id='' style='color: red '>"+etat+"</span> </p>"+
                
                        "</div>   "+

                        "<div class='col-3' style='font-size:11px;'>"+
                        "<p> <span style='font-weight:bold;'> Date ouverture :</span> <span style='color:#A0A0A0; font-style:italic;font-size:10px;'>"+DateO +"</span> </p> "+
                
                       " </div>  "+
                        "<div class='col-3' style='font-size:11px'>"+
                       "<p><span style='font-weight:bold;'> Date fermeture :</span> <span style='color:#A0A0A0; font-style:italic'>"+DateF+"</span> </p> "+
                                 
                              
                        "</div> "+

                        "<div class='col text-center' style='font-size:11px'>"+

"<p ><img width='20px' class='img-fluid' src='../Images/ferme.png'/></p>"+
"</div> "+
                        

                
              "</div> "+ 
               " <div class='row'>"+
               " <div class='' style='font-size:13px; width:90%'>"+
               " <div style='height:60px; word-wrap: break-word;'><p >  <span  style='font-weight:bold;font-size:16px;'> Message :</span><span id='message' > "+ description +" </span> </div>"+
                                 
                
                "</div> "+
                
                "</div>  "+ 
                "<div class='row'>"+
               " <div class style='font-size:13px;  width:90%'>"+
                "<div style='height:60px; word-wrap: break-word;'><p> <span  style='font-weight:bold;font-size:16px'> Reponse :</span><span id='reponse'>"+Reponse+" </span></p></div>"+
                    
                
                       " </div> "+
                
                "</div>  "+     
                "</div>"+
        "</li>" );


      }

       

      
      

        //  $("#titre").html(titre);
        //  $("#message").html(description);

        //  $("#reponse").html(Reponse);
  
            }


        },
        error:function(xhr, status, error){

            var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        },
          
    });

});

}

function AddAdmin(id){


    $(document).ready(function(){ 
    $.ajax({
        url: '../../Traitement/AddAdminTicket.php',
        type: 'get',
        data:{idTicket:id},
        success: function(response){

    window.location.reload()


        }
      });
    });

    
}


function changeEtat(id, etat){

  $(document).ready(function(){ 
    $.ajax({
        url: '../../Traitement/ChangeEtatTicket.php',
        type: 'get',
        data:{
          Id: id,
          Etat:etat
        },
        success: function(response){
                          
                AddAdmin(id);


        }
      });
    });


}


function soccuper(i){

$("#Etat"+i).replaceWith("<p id='Etat"+i+"'> <span style='font-weight:bold;font-size:14px;'> Etat :</span> <span  style='color: red '> En traitement</span> </p>");

changeEtat(i,"En traitement");


//document.getElementById("#Etat"+i).find('.Etat').innerHTML = 

//$("#unticket"+i).remove();

}


function editerRR(idT){

var Reponse= document.getElementById('VotreReponse').value;

    $(document).ready(function(){ 
    $.ajax({
        url: '../../Traitement/AddReponse.php',
        type: 'get',
       data:{Reponse:Reponse,idT:idT},
    success: function(response){

        $('#myModal1').modal('hide');
        window.location.reload()

    }
});
    });

}



</script>

<body style="height:100%">

<?php

include("../HeadersA/headerDA.php");

?>

<div class="modal" id='myModal1'tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Donnez Votre Reponse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form >

<div class="form-group">
  <label for="VotreReponse">Reponse </label>
  <textarea name="VotreReponse" class="form-control" id="VotreReponse" rows="3"></textarea>
</div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" id="editerRM" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<div class='modal' id='myModal' tabindex='-1' role='dialog'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
       <h5 class='modal-title'>S'occuper du ticket</h5>
      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
     </div>
      <div class='modal-body' id='ss'>
        <p>Etes vous sure de vouloir vous occuper de ce ticket</p>
      </div>
      <div class='modal-footer'>
        <button type='button' id='delete'   class='btn btn-primary'>Save changes</button>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Annuler</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="exampleModalD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Deconnexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

Etes vous sure de vouloir vous deconnecter


      </div>

      <div class='modal-footer'>
        <button type='button' id='delete'   class='btn btn-primary'> Oui </button>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Annuler</button>
      </div>
      
    </div>
  </div>
</div>









        


<div style="width:100%;" >



</div>

<div class="container" style="margin-top:100px">

<div class="row" >

<div class="col" id="Pere" >

    
        
</div>


</div>

</div>








<?php
include("../../Footers/footer.php");
?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>



</html>
