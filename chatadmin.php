<?php 
session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');


if(!$_SESSION['mdp']){
    header('Location: index.php');}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message questions</title>
</head>
<body>
    <?php 
    $recuperQuestion=$bdd->query('SELECT * FROM questions');
    while($queston=$recuperQuestion->fetch()){
        ?>

        <div class="message">
        <p><?=$queston['description'];?></p>
        <a href="reponse.php"><button>repondre</button></a>
        </div><br><br><br>
        
     
        

        <?php
    }
    ?>
    <?php 
    $recuperQuestion=$bdd->query('SELECT * FROM reponce');
    while($queston=$recuperQuestion->fetch()){
        ?>

        <div class="reponse">
        <p><?=$queston['description'];?></p>
        </div><br><br><br>
        

        <?php
    }
    ?>
</body>
</html>