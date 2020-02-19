
<?php

session_start ();

if(isset($_GET['titre']) && isset($_GET['description']) && isset($_SESSION['ID'])){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $titre=$_GET['titre'];
    $description=$_GET['description'];
    $etat="ouvert";
    $IDuser=$_SESSION['ID'];
    $reponse="";
    $DateO=date('Y-m-d H:i:s');
    $DateF="";
    
    if( $titre !== "" &&  $description !== "")
    {

    $req =  $bdd->prepare("INSERT INTO ticket (Titre ,Description, Etat, IDuser, DateOuverture) VALUES (?, ?, ?, ?, ?)");

     $req->execute(array($titre, $description, $etat, $IDuser, $DateO));
     $req->closeCursor();


     exit();
    }else{

    echo "remplissez tous les champs";
}
} else{

header("location: ../TicketClient/AffichModifTicket.php");

}



?>