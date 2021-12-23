<?php 
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $getid=$_GET['id'];
    $recupereArticle=$bdd->prepare('SELECT * FROM articles WHERE id=?');
    $recupereArticle->execute(array($getid));
    if($recupereArticle->rowCount()>0){
        $deleteArticle=$bdd->prepare('DELETE FROM articles WHERE id=?');
        $deleteArticle->execute(array($getid));
        header('Location:article.php');

    }else{
        echo "aucun articles trouver";
    }

}else{
    echo "aucun identifiant n'a pas ete trouver";
}

?>