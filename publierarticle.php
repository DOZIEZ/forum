<?php 
session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');

if(!$_SESSION['mdp']){
    header('Location: index.php');}



if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST['description'])){
        $titre=htmlspecialchars($_POST['titre']);
        $description=nl2br(htmlspecialchars($_POST['description']));

        $insererArticle=$bdd->prepare('INSERT INTO articles(titre, description)VALUES(?, ?)');
        $insererArticle->execute(array($titre, $description));


        echo "<h4 class=\"h5\">L'article a bien ete envoyer </h4>";
        header('Location:article.php');
    }else{
        echo "<h4 class=\"h4\" >veuiller completer tous les champs</h4>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<form method="POST"action="" >
<input type="text" name="titre"id="put"placeholder="titre de l'article"><br><br>
<textarea name="description" id="put"placeholder="l'article"></textarea><br><br>
<input type="submit" name="envoi"class="submit">

</form>

<div class="div"><button><a href="admin.php"> Espace_admin</a></button></div>

</div>

    
</body>
</html>