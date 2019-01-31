<?php include '_navbar.php'; ?>


</header>
<body>
<div class="text-center">

<h1 style="color:#F57C00;">Création de votre Quizz</h1>

<?php require'php/pdo.php';


$cat = $bd->query('SELECT * FROM categorie');
while ($categorie = $cat->fetch()); ?>

<form method="post" action="">
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

    
  
        
        $c = new mysqli('localhost','root', '', 'quizz');
        mysqli_set_charset($c,"utf8");
    $sql = "INSERT INTO questionnaire (`idQuizz_Questionnaire`, `titreQuizz_Questionnaire`, `datecreation_Questionnaire`, `dateModification_Questionnaire`, `idStatut_statut_quizz`, `id`, `id_membre`) VALUES (NULL, '$titre', CURRENT_TIMESTAMP, NULL, '1', '$catQuizz', '$idMembre')";
   
    if(!$c->query($sql))
    {
            printf("Message d'erreur : %s\n", $c->error);
        }
        mysqli_close($c);
       
}   else echo "Veuillez saisir tous les champs !";
// echo $titre;
// var_dump($titre.$catQuizz.$nbQuestions);
$compteurQuestion = 1;
$repQ = 1;

echo '<em><strong>Votre Quizz '. $titre.' comporte '. $nbQuestions .' questions</em></strong>';
echo '<br>';
// echo 'combien de réponses à la question '.$compteurQuestion.' ?';
// echo '<input type="number">';
echo '<div class="md-form input-group mb-3">
<div class="input-group-prepend">
    <span class="input-group-text md-addon warning" id="inputGroupMaterial-sizing-default">Question '.$compteurQuestion. '/'.$nbQuestions .'</span>
</div>
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
</div>';
echo '<div class="input-group">
<div class="input-group-prepend">
    <span class="input-group-text">Réponse '.$repQ.'</span>
</div>
<textarea class="form-control" aria-label="With textarea"></textarea>
</div>';
?><button>+de réponses?</button><?php
}

    ?>
    <?php include '_footer.php' ?>
    </div>
    </body>


    </html>