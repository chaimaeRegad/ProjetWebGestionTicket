
<?php

session_start ();

if(isset($_GET['Id']) && isset($_GET['Etat']) && isset($_SESSION['ID'])){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $Id=$_GET['Id'];
    $etat=$_GET['Etat'];
    
    if( $Id !== "" &&  $etat !== "")
    {

    $req =  $bdd->prepare("UPDATE ticket SET Etat =? WHERE ID =?");
 
     $req->execute(array($etat, $Id));
     
     $req->closeCursor();


     exit();
    }else{

    echo "erreur veillez reseayer";
}
} else{

header('location: ../index.php');

}



?>