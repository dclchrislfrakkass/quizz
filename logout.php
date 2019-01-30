<?php include '_navbar.php'; ?>

        
</header>
<body>
<?php


session_destroy();

header('Location: index.php');
exit();
?>
<?php include '_footer.php' ?>