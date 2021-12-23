<?php 
session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');

if (isset($_GET['id']) AND !empty($_GET['id'])){
    $getid=$_GET['id'];
    $recupeUser=$bdd->prepare('SELECT * FROM menbres WHERE id =?');
    $recupeUser->execute(array($getid));
    if($recupeUser->rowCount()> 0){
        $bannirUser=$bdd->prepare('DELETE FROM menbres WHERE id=?');
        $bannirUser->execute(array($getid));

         header('Location: menbre.php');

    }else{
        echo "aucun menbre n'a ete trouver";
    }


}else{
    echo "l'identifiant n'a pas ete recuperer";
}



?>