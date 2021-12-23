<?php
session_start();
// $bdd = n(dew PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');

if (isset($_POST['valider'])){

    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut="admin";
        $mdp_par_defaut="123";

        $pseudo_menbre_par_defaut="menbre";
        $mdp_menbre_par_defaut="menbre";
        
        
        $pseudo_saisi=htmlspecialchars($_POST['pseudo']);
        $mdp_saisi=htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi==$pseudo_par_defaut AND $mdp_saisi==$mdp_par_defaut){
            $_SESSION['mdp']= $mdp_saisi;
            header('Location: admin.php');
        } 
            if(
                $pseudo_saisi==$pseudo_menbre_par_defaut AND $mdp_saisi==$mdp_menbre_par_defaut){
                    $_SESSION['mdp']= $mdp_saisi;
                 
                    header('Location: pagemenbres.php');
                             
                }


               
            else{
            echo "<h4 class=\"h4\">Votre mot de passe ou pseudo est incorrect!!</h4>";
        }

    }else{
   echo" <h4 class=\"h4\">Veuiller remplir tous les champs !!!</h4>";
   
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">
    <title>connexion</title>
</head>
<body>
<h1>CONNEXION</h1>
    
    <div class="container">

        <form method="POST"action="" >
        <input type="text"name="pseudo" autocomplete="off" id="put"placeholder="pseudo">
        <br><br>
        <input type="password"name="mdp"id="put"placeholder="password">
        <br><br>
        <input type="submit" name="valider" class="submit" id="btn">
        
        </form>
    </div>
    
</body>
</html>