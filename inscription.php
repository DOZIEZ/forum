<?php 
session_start();
$bdd =new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');

if(!$_SESSION['mdp']){
    header('Location: index.php');}



if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST['password']) AND !empty($_POST['phone'])){
        $titre=htmlspecialchars($_POST['titre']);
        $passsword=htmlspecialchars($_POST['password']);
        $phone=htmlspecialchars($_POST['phone']);

        $insererNouveauUtilisateur=$bdd->prepare('INSERT INTO identifiants(titre, password , phone)VALUES(?, ? ,?)');
        $insererNouveauUtilisateur->execute(array($titre, $passsword , $phone));


        echo "<h4 class=\"h5\">vous ete inscrit </h4>";
    }else{
        echo "<h4 class=\"h4\" >veuiller completer tous les champs</h4>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">   <U>Y</U>
<head>
<link rel="stylesheet"href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<form method="POST"action="" >
<input type="text" name="titre"id="put"placeholder="Nom"><br><br>
<input type="password" name="password"id="put"placeholder="Mot de passe"><br><br>
<input type="telephone" name="phone"id="put"placeholder="Numero de telephone"><br><br>
<input type="submit" name="envoi"class="submit">

</form>


</div>

    
</body>
</html>