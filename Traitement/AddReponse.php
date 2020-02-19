
<?php

session_start ();

if(isset($_SESSION['ID']) && isset($_GET['Reponse']) && isset($_GET['idT'])  && $_SESSION['role']=="A" ){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $DateF=date('Y-m-d H:i:s');

    $req =  $bdd->prepare("UPDATE ticket SET Reponse = ?,  Etat = ? , DateFermeture = ? WHERE ID = ?");

     $req->execute(array($_GET['Reponse'],"fermé",$DateF,$_GET['idT']));
     $req->closeCursor();


     exit();

} else{

header("location: ../Admin/index.php");

}



?>