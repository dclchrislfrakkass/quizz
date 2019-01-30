<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
    

    <!--Navbar-->
    <nav class="navbar navbar-light navbar-1 top-fixed">
        
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Quizz</a>
        
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
        aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent15">
            
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <?php

    if (isset($_SESSION['pseudo']))
    {
        echo $_SESSION['pseudo'];
    }

    ?>
                    <a class="nav-link" onclick="loadInd()">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <!-- <button id="button_co" onclick="loadDoc()">Connexion</button> -->
        
                
                    <a class="nav-link" onclick="loadCo()"">Connexion</a>
                 
                </li>
                <li class="nav-item">
              
                    <a class="nav-link"  onclick="loadIns()">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <!-- Links -->
            
        </div>
        <!-- Collapsible content -->
        
    </nav>

</header>
<body>

    <div id="center">   
    
    <?php 
 include 'top.php';
 include 'php/genres.php' ?>


</div>
    <footer>

    <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="http://lacroix-c.fr" target="blank"> Chris L</a>
        </div>

    </footer>
    
  
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script>
    function loadInd() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("center").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "base.php", true);
    xhttp.send();
    }

    function loadCo() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("center").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "connexion.php", true);
    xhttp.send();
    }
  
    function loadIns() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("center").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "inscription.php", true);
    xhttp.send();
    }
    </script>
</body>
</html>