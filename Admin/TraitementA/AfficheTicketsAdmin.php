<?php
session_start ();

if(isset($_SESSION['ID']) && $_SESSION['role']=="A"){
    
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }




$req = $bdd->prepare('SELECT * FROM ticket ');
$req->execute();

while($row = $req->fetch()){

    $id = $row['ID'];
    $Titre = $row['Titre'];
    $Description = $row['Description'];
    $Reponse = $row['Reponse'];
    $etat = $row['Etat'];
    $DateO= $row['DateOuverture'];
    $DateF= $row['DateFermeture'];


    if($row['AdminID']==$_SESSION['ID']){

        $AdminID="this";

    }else{

        $AdminID= $row['AdminID'];
    }

    $return_arr[] = array("id" => $id,
                    "titre" => $Titre,
                    "etat" => $etat,
                    "description" => $Description,
                    "reponse" => $Reponse,
                    "DateO" => $DateO,
                    "DateF" => $DateF,
                    "AdminID"=> $AdminID,
                );


}

header("Content-Type: application/json", true);

// Encoding array in JSON format
echo json_encode($return_arr);

exit;
}else{

header("location: ../index.php");

}