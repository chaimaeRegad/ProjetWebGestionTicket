
<?php

session_start ();

if(isset($_SESSION['ID']) && isset($_GET['idTicket']) && isset($_SESSION['role'])=="A" ){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }


    $req =  $bdd->prepare("UPDATE ticket SET AdminID = ? WHERE ID = ?");

     $req->execute(array($_SESSION['ID'],$_GET['idTicket']));
     $req->closeCursor();


     exit();

} else{

    header("location: ../Admin/index.php");

}



?>