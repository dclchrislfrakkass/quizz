
<?php

include '_navbar.php';
?>
</header>
<body>

<div class="text-center">

   
<h2>Inscription</h2>
   
    <form method="post" action="">
        <p>Pseudo</p>
        <input type="text" name="pseudo">
        <p>Email</p>
        <input type="email" name="email">
        <p>Mot de passe (6 charactères minimum)</p>
        <input type="password" name="password">
        <p>Retapez votre mot de passe</p>
        <input type="password" name="repeatpassword"><br><br>
        <input type="submit" name="submit" value="Valider">
   
    </form>
   
<?php



if (isset($_POST['submit']))
{

/* on test si les champ sont bien remplis */
    if(!empty($_POST['pseudo']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['repeatpassword']))
    {

        $pseudo = htmlspecialchars(trim($_POST['pseudo']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));


        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['password'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['password']==$_POST['repeatpassword'])
            {
                // On crypte le mot de passe
                $hPass= password_hash($_POST['password'], PASSWORD_DEFAULT);
                // on se connecte à MySQL et on sélectionne la base
                $c = new mysqli('localhost','root', '', 'quizz');
                /* Vérification de la connexion */
                //On créé la requête
                $sql = "INSERT INTO membre (`id_membre`, `pseudo_membre`, `email_membre`, `motDePasse_membre`, `dateInscription_membre`, `id_statut_membre`) VALUES (NULL, '$pseudo', '$email', '$hPass', CURRENT_TIMESTAMP, '1')";
                 
                /* execute et affiche l'erreur mysql si elle se produit */
                if(!$c->query($sql))
                {
                    printf("Message d'erreur : %s\n", $c->error);
                }
            // on ferme la connexion
            mysqli_close($c);
            echo '<br/>';
            echo '<br/>';
            echo $pseudo. " a bien été enregistré !";
            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";
}

?>
</div>
<?php include '_footer.php' ?>