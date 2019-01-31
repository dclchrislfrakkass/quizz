<?php include '_navbar.php'; ?>

        
</header>
<body>
<div class="top">

<h1><?php if (isset($_SESSION['pseudo']))
    {   ?>
        <h1><?php echo $_SESSION['statut'];?></h1>
        <h2><?php echo $_SESSION['pseudo'];
        } ?>
        <button class="btn btn-primary"><i class="fas fa-plus"></i> Quizz</button>
        
        <script>
        $(document).ready(function(){
        $("button").click(function(){
            $("#qq").load("create.php");
        });
        });
        </script>
     
         
    </h2>
    
    </div>
<div id="qq"></div>

    <?php 

//vérifie que ce soit un admin de connecté 
if(isset($_SESSION['statut']) AND ($_SESSION['statut'] == "Editeur")){  ?>










<?php } ?>








<?php include '_footer.php' ?>

</body>
</html>