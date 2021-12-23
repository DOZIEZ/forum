<?php 
session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30555319_dozier;','epiz_30555319', 'aIAYFZi3xwvG2L');
// $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root', '');


if(!$_SESSION['mdp']){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">

    <title>Afficher les menbres</title>
</head>
<body>

<?php 
    
    $recuperuser= $bdd->query('SELECT * FROM  menbres  ');

    while($user= $recuperuser->fetch()){
?>
<p><?=$user['pseudo'];?> <a href="bannir.php?id=<?= $user['id'];?>">bannir</a></p>
<?php     }
    
    ?>
<button><a href="admin.php"> Espace_admin</a></button>
    
</body>
</html>