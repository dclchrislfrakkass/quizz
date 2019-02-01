
<?php include '_navbar.php'; ?>

        
</header>
<body>
        
<div id="center">   

<?php
$myObj->question = "est ce que le troll pue?";
$myObj->reponses = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
<!-- 
INSERT INTO `question` (`id_question`, `libelle_question`, `choix_question`, `idQuizz_Questionnaire`) VALUES (NULL, NULL, NULL, '109'); -->

myObj ={
    "Question":"Est-ce que le troll pue?",
    {"1":{'bonneRep':true,
        'intitulé':oui}}
    {"2":{'bonneRep':false,
        'intitulé':non}}
    } 


    ///
    {"1":{"bonneRep":true, "intitulé":"oui"}}
    {"2":{"bonneRep":false, "intitulé":"non"}}
    //////
</div>

<?php include '_footer.php' ?>

            </body>
            </html>