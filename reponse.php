<?php 
session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');

if(!$_SESSION['mdp']){
    header('Location: index.php');}



if(isset($_POST['envoi'])){
    if(!empty($_POST['description'])){
        $description=nl2br(htmlspecialchars($_POST['description']));

        $insererQuestion=$bdd->prepare('INSERT INTO reponce(description)VALUES(?)');
        $insererQuestion->execute(array($description));


        echo "<h4 class=\"h5\">L'la question a bien ete envoyer </h4>";
        header('Location:chatadmin.php');
    }else{
        echo "<h4 class=\"h4\" >veuiller repondre</h4>";
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
    <div class="container">

        <form method="POST"action="" >
<textarea name="description" id="put"placeholder="Votre Reponse"></textarea><br><br>
        
<input type="submit" name="envoi"class="submit">

        
        </form>
    </div>
    
        
    </body>
    </html>