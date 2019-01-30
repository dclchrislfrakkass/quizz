<?php

try {
$bd=new PDO('mysql:host=localhost:3306;dbname=quizz;','root','');
//stock url 51.254.203.143
$bd->exec('SET NAMES utf8');
// echo 'Connexion OK';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
