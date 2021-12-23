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
    <title>Afficher tous les articles</title>
</head>
<body>
    <?php 
    $recuperarticles=$bdd->query('SELECT * FROM articles');
    while($article=$recuperarticles->fetch()){
        ?>

        <div class="article">
        <h1><?=$article['titre'];?></h1>
        <p><?=$article['description'];?></p>
        <a href="questions.php"><button>Posez des questions</button></a>
        </div>
        

        <?php
    }
    ?>
</body>
</html>