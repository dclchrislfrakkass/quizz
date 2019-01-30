<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
    
<?php include 'navbar.php'; ?>
 
</header>
<body> -->
<?php

if (isset($_SESSION['pseudo']))
{
    echo 'se déconnecter';
    echo '<a href="logout.php" target="_blank">logout</a>';
    
}



if (!isset($_SESSION['pseudo'])){
?>
<h2>Connexion</h2>
   
   <form method="post" action="">
       <p>Pseudo</p>
       <input type="text" name="pseudo">
       <p>Mot de passe</p>
       <input type="password" name="password"><br><br>
       <input type="submit" name="submit" value="Valider">
  
   </form>
  
<?php
require 'php/pdo.php';

if(!empty($_POST['pseudo']) and !empty($_POST['password'])) {

$pseudo = htmlspecialchars(trim($_POST['pseudo']));
$password = htmlspecialchars(trim($_POST['password']));

//  Récupération de l'utilisateur et de son pass hashé
$req = $bd->prepare("SELECT pseudo_membre, motDePasse_membre FROM membre WHERE pseudo_membre = '$pseudo'");
$req->execute(array(
    'pseudo' => $pseudo));
    $resultat = $req->fetch();
    // var_dump($resultat);
    
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['motDePasse_membre']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();       
        $_SESSION['id'] = $resultat['pseudo_membre'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Bonjour ' . $_SESSION['pseudo'];
        echo '<br>';
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
}

}
///session utilisateur

// if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
// {
//     echo 'Bonjour ' . $_SESSION['pseudo'];
// }


?>
<!-- 
<footer>
<?php include 'footer.php'; ?>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->