<?php include '_navbar.php'; ?>


</header>
<body>
<div class="text-center">

<h1 style="color:#F57C00;">Création de votre Quizz</h1>

<?php require'php/pdo.php';


$cat = $bd->query('SELECT * FROM categorie');
while ($categorie = $cat->fetch()); ?>

<form method="post" action="questionAdd.php">
<h4>Titre du Quizz</h4>
<input type="text" name="tQuizz">
<h4>Choississez une catégorie</h4>

<?php require'php/pdo.php';

$cat = $bd->query('SELECT * FROM categorie');
?><select name="categories"> <?php
while ($categorie = $cat->fetch()){ ?>
    <option value="<?php echo $categorie['id']?>"><?php echo $categorie['Nom_categorie']?></option>
    <?php
}
?>
</select>
<h4>Combien de questions</h4>
<input type="number" name="nbQuestions">
<br><br>
<input type="submit" name="submit" value="Valider">
</form>
<?php
if (isset($_POST['submit']))
{
    if (!empty($_POST['tQuizz']) and !empty($_POST['categories']) and !empty ($_POST['nbQuestions']))
    {
        
        
        $titre = htmlspecialchars(trim($_POST['tQuizz']));
        $catQuizz = htmlspecialchars(trim($_POST['categories']));
        $nbQuestions = htmlspecialchars(trim($_POST['nbQuestions']));
        $idMembre = $_SESSION['id_membre'];

       
}   else echo "Veuillez saisir tous les champs !";
// echo $titre;
// var_dump($titre.$catQuizz.$nbQuestions);

}

    ?>
    <?php include '_footer.php' ?>
    </div>
    </body>


    </html>