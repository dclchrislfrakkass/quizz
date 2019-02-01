<?php include '_navbar.php'; ?>


</header>
<body>

<div id="center">   

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
    
}

$titre = htmlspecialchars(trim($_POST['tQuizz']));
$catQuizz = htmlspecialchars(trim($_POST['categories']));
$nbQuestions = htmlspecialchars(trim($_POST['nbQuestions']));
$idMembre = $_SESSION['id_membre'];

$compteurQuestion = 1;
$repQ = 1;

echo '<em><strong>Votre Quizz '. $titre.' comporte '. $nbQuestions .' questions</em></strong>';
echo '<br>';
echo '<br>';
?><form name="formulaireDynamique" action="next.php"><?php
// echo 'combien de réponses à la question '.$compteurQuestion.' ?';
// echo '<input type="number">';
echo '<div class="md-form input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text md-addon warning" id="inputGroupMaterial-sizing-default">Question '.$compteurQuestion. '/'.$nbQuestions .'</span>
</div>
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
</div>';
echo '<div class="form-group">
<label class="col-md-4 control-label" for="Réponse X">Réponse '.$repQ.'</label>
<div class="col-md-4">
<div class="input-group">
<input id="Réponse X" name="Réponse X" class="form-control" type="text" placeholder="cochez si la réponse est la bonne">
<span class="input-group-addon">     
<input type="checkbox">     
</span>'. $repQ ++. '
</div>

</div>
</div>';

// echo '<div class="input-group">
// <div class="input-group-prepend">
//     <span class="input-group-text">Réponse '.$repQ.'</span>
// </div>
// <textarea class="form-control" aria-label="With textarea"></textarea>
// </div>';
echo '<div class="form-group">
<label class="col-md-4 control-label" for="Réponse X">Réponse '.$repQ.'</label>
<div class="col-md-4">
<div class="input-group">
<input id="Réponse X" name="Réponse X" class="form-control" type="text" placeholder="cochez si la réponse est la bonne">
<span class="input-group-addon">     
<input type="checkbox">     
</span>'. $repQ ++. '

</div>

</div>
</div>';

// echo '<div class="form-group">
// <label class="col-md-4 control-label" for="Réponse X">Réponse '.$repQ.'</label>
// <div class="col-md-4">
// <div class="input-group">
// <input id="Réponse X" name="Réponse X" class="form-control" type="text" placeholder="cochez si la réponse est la bonne">
// <span class="input-group-addon">     
// <input type="checkbox">     
// </span>'. $repQ ++. '

// </div>

// </div>
// </div>';

// echo '<div class="form-group">
// <label class="col-md-4 control-label" for="Réponse X">Réponse '.$repQ.'</label>
// <div class="col-md-4">
// <div class="input-group">
// <input id="Réponse X" name="Réponse X" class="form-control" type="text" placeholder="cochez si la réponse est la bonne">
// <span class="input-group-addon">     
// <input type="checkbox">     
// </span>'. $repQ ++. '

// </div>

// </div>
// </div>';
// ?>
<div class="input_fields_wrap">

<!-- <input type="button" id="add" class="btn btn-warning" value=" + de réponses ? "/> -->
<button type="submit" class="btn btn-warning" value=" Question suivante "/>







</div>

<?php include '_footer.php' ?>

</body>

</html>
<!-- 
<script>
document.querySelector('#add').addEventListener('click', function(event) {
   
var first = document.querySelector('.form-group');
first.parentNode.appendChild(first.cloneNode(true));
      
});
</script> -->