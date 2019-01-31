<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Quizz</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<header>
<!--Navbar-->
<nav class="navbar navbar-light navbar-1 top-fixed">
        
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Quizz</a>
    <div class="float-left utilisateur">

    </div>
    <!-- Utilisateur:  -->
    <?php

    if (isset($_SESSION['pseudo']))
    {
        echo $_SESSION['pseudo'];
        // echo $_SESSION['statut'];
    }



    ?>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">
            
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if (!isset($_SESSION['pseudo']))
            {
            echo '<li class="nav-item">
                <a class="nav-link" href="connexion.php">Connexion</a>
            </li>';
            echo '<li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
            </li>';} ?>
        
            <?php 
            if (isset($_SESSION['statut']))
            {
               
                if (($_SESSION['statut'] == "Admin") OR ($_SESSION['statut'] == "SAdmin")){
            echo '<li class="nav-item">
            <a class="nav-link" href="admin.php">Administration</a>
        </li>';}
        else if ($_SESSION['statut'] == "Editeur"){
            echo '<li class="nav-item">
            <a class="nav-link" href="edit.php">Gestion</a>
        </li>';}
            echo '<li class="nav-item">
                <a class="nav-link" href="logout.php">Se déconnecter</a>
            </li>';} ?>
            
                <a class="nav-link" href="#">Contact</a>
            </li>

        </ul>
        <!-- Links -->
            
    </div>
    <!-- Collapsible content -->
        
</nav>
