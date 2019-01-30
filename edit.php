<?php include '_navbar.php'; ?>

        
</header>
<body>
<div class="top">

<h1><?php if (isset($_SESSION['pseudo']))
    {
        echo $_SESSION['pseudo'];
    } ?></h1> Gestion

</div>









<?php include '_footer.php' ?>

</body>
</html>