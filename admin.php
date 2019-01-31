<?php include '_navbar.php'; ?>

 




</header>
<body>
<div class="text-center">
<div class="top">

<?php if (isset($_SESSION['pseudo']))
    {   ?>
    <h1><?php echo $_SESSION['statut'];?></h1>
    <h2><?php echo $_SESSION['pseudo'];
    } ?>
    <button class="btn btn-primary"><i class="far fa-plus-square"></i> Quizz</button>
 
    <script>
    $(document).ready(function(){
    $("button").click(function(){
        $("#qq").load("create.php");
    });
    });
    </script>
</h2>

</div>
<div id="qq">
<?php 

//vérifie que ce soit un admin de connecté 
if(isset($_SESSION['statut']) AND ($_SESSION['statut'] == "Admin") OR ($_SESSION['statut'] == "SAdmin")){  ?>
<h2>membres</h2>


<?php
require 'php/pdo.php';
// pour supprimer les membres de la base de données
if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
    $supprime = (int) $_GET['supprime'];
    $req = $bd->prepare('DELETE FROM membre WHERE id_membre = ?');
    $req->execute(array($supprime));
}

$membres = $bd->query('SELECT * FROM membre JOIN statut_membre ON membre.id_statut_membre = statut_membre.id_statut_membre');
$quizz = $bd->query('SELECT * FROM questionnaire');

//verifie le nombre de quizz dans la bd
$qcount = $bd->query('SELECT COUNT(*) FROM questionnaire');
$qc = $qcount->fetch();

//verifie et compte les quizz en attente
$state = $bd->query("SELECT COUNT(*) FROM questionnaire JOIN statut_quizz ON questionnaire.idStatut_statut_quizz = statut_quizz.idStatut_statut_quizz where nom_statut_quizz = 'en attente'");
$iState = $state->fetch();

//verifie et compte les quizz validé
$stateOk = $bd->query("SELECT COUNT(*) FROM questionnaire JOIN statut_quizz ON questionnaire.idStatut_statut_quizz = statut_quizz.idStatut_statut_quizz where nom_statut_quizz = 'validé'");
$iStateOk = $stateOk->fetch();

//montre les questionnaire en attente
$qWait = $bd->query("SELECT * FROM questionnaire JOIN statut_quizz ON questionnaire.idStatut_statut_quizz = statut_quizz.idStatut_statut_quizz where nom_statut_quizz = 'en attente'");

// join pour infos quizz
$iQuizz = $bd->query("SELECT * FROM questionnaire NATURAL JOIN membre");




?>
<div class="card">
<div class="card-header">
    <a href="#item" class="card-link" data-toggle="collapse"> Montrez-moi !</a>
</div>
<div class="collapse" id="item">
<?php while ($m = $membres->fetch()) { ?>
    <div class="card-body">
    <p class="card-text"><?= $m['pseudo_membre'] ?> : <?= $m['nom_statut_membre'] ?>
    <?php
    if ($_SESSION['statut'] == "SAdmin"){ ?>
    - <a href="admin.php?supprime=<?= $m['id_membre'] ?>">Supprimer</a>
    </p><?php } ?>
    </div><?php  } ?>
</div>
</div>

<h2>Quizz</h2>
<?php 
$q = $quizz->fetch();
?>

Total : <?php echo $qc['COUNT(*)'];  ?> <br>
En ligne: <?php echo $iStateOk['COUNT(*)']; ?> <br>
En attente: <?php echo $iState['COUNT(*)']; ?> <br>
<ul>
<?php while ($qWa = $iQuizz->fetch()){ ?>
<li><strong><?= $qWa['titreQuizz_Questionnaire']?> </strong> date : <?= $qWa['datecreation_Questionnaire']?> par : <?= $qWa['pseudo_membre']?>+ - </li><?php } ?>

</ul>
<?php echo $m['id_membre'];?>
</div>
</div>
<?php } 
?>


<?php include '_footer.php' ?>

</body>
</html>