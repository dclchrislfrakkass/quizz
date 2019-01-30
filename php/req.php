<?php
require 'pdo.php';

$sql = $bd->query('SELECT * FROM categorie WHERE id = 1');

while ($donnees = $sql->fetch()){

echo $donnees['Nom_categorie'];
}
// $donnee = $sql->fetch();
// echo $donnee;
