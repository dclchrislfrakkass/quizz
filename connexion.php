
<?php

include '_navbar.php';
?>
</header>
<body>

<div class="text-center">
<?php
if (isset($_SESSION['pseudo']))
{
    echo 'se déconnecter';
    echo '<a href="logout.php" target="_blank">logout</a>';
    
}



if (!isset($_SESSION['pseudo']))
{
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

//  Récupération de l'utilisateur, de son pass hashé et de son statut
$req = $bd->prepare("SELECT * FROM membre JOIN statut_membre ON membre.id_statut_membre = statut_membre.id_statut_membre WHERE pseudo_membre = '$pseudo'");
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
        // $cookieFin = time()+60*60*24;
        // $pseudo = $resultat['pseudo_membre'];
        // setcookie("pseudo", $pseudo, $cookieFin);
        // session_start();
        // $_SESSION['id'] = $resultat['pseudo_membre'];
        $statut = $resultat['nom_statut_membre'];
        $idM = $resultat['id_membre'];
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['statut'] = $statut;
        $_SESSION['id_membre'] = $idM;
        echo 'Bonjour ' . $_SESSION['pseudo'];
        // var_dump($resultat);
        echo '<br>';
        echo 'Vous êtes connecté !';

        header('Location: index.php');
        exit();
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
}

}


?>
</div>
<?php include '_footer.php' ?>