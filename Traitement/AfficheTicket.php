<?php
session_start ();

if(isset($_SESSION['ID'])){
    
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

$IdUser =$_SESSION['ID'];


$req = $bdd->prepare('SELECT * FROM ticket WHERE IDuser = ? ');
$req->execute(array($IdUser));

while($row = $req->fetch()){

    $id = $row['ID'];
    $Titre = $row['Titre'];
    $Description = $row['Description'];
    $Reponse = $row['Reponse'];
    $etat = $row['Etat'];
    $DateO= $row['DateOuverture'];
    $DateF= $row['DateFermeture'];

    $return_arr[] = array("id" => $id,
                    "titre" => $Titre,
                    "etat" => $etat,
                    "description" => $Description,
                    "reponse" => $Reponse,
                    "DateO" => $DateO,
                    "DateF" => $DateF,
                );


}

header("Content-Type: application/json", true);

// Encoding array in JSON format
echo json_encode($return_arr);
exit;
}else{

header("location: ../index.php");

}