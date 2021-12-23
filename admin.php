<?php 
session_start();

if(!$_SESSION['mdp']){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">

    <title>Document</title>
</head>
<body>
<h1>Home</h1>
    <a href="menbre.php">Afficher tous les menbres</a><br><br>
    <a href="publierarticle.php">Publer un nouvel article</a><br><br>
    <a href="article.php">Afficher tous les articles</a><br><br>
    <a href="chatadmin.php">Afficher tous les questions</a>



   <div class="div">
   <button><a href="logaut.php"> Deconnexion</a></button>
   </div> 

   
</body>
</html>