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
<?php
if (!isset($_SESSION['pseudo'])){
    echo'
    <li class="nav-item">             
    <a class="nav-link" id="connexion" onclick="loadCo()">Connexion</a>
    </li>';             
    echo'
    <li class="nav-item">
    <a class="nav-link" onclick="loadIns()">Inscription</a>
    </li>';}
    if (isset($_SESSION['pseudo'])){        
        echo'
        <li class="nav-item">
        <a class="nav-link" onclick="loadDeco()">se déconnecter</a>
        </li>';} ?>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
        </li>
        </ul>
        
        
        </div>
        
        
        </nav>