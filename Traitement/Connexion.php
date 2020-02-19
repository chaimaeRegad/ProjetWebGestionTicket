
<?php

session_start ();

if(isset($_POST['email']) && isset($_POST['password'])){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionticket;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $emaill=$_POST['email'];
    $passwordd=sha1($_POST['password']);

    $email=$bdd->quote($emaill);

    $password=$bdd->quote($passwordd);


    if( $email !== "" &&  $password !== "")
    {

    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?  AND mdp = ?");

    $req->execute(array($email,$password));
    $donnees = $req->fetch();
    $count =$req->rowCount();

    if($count!=0) // nom d'utilisateur et mot de passe correctes
    { 

    $droit =$donnees['fonction'];
    $_SESSION['role']= $droit;
    $_SESSION['email'] = $email;
    $_SESSION['ID'] = $donnees['ID'];

    
                if($droit=="E"){
                                
                       echo"2";
                       exit();
                }
                else{
                    
                    echo"Connectez vous depuis votre espace"; 
                }    
        
    }
    else
    {
   echo " nom d'utilisateur ou mots de passs incorrectes".$password;
    }

    $req->closeCursor();

    }else{

    echo "remplissez tous les champs";
}
} else{

header("location: ../index.php");

}



?>