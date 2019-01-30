<?php
require 'pdo.php';

?>



<div class="genres">
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-7 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=1');
                $donnees = $sql->fetch();
                echo $donnees['Nom_categorie'];?></div>
                <div class="col-4 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=2');
                    $donnees = $sql->fetch();
                    echo $donnees['Nom_categorie'];?></div>
                </div>
                
                <div class="row">
                    <div class="col-4 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=3');
                        $donnees = $sql->fetch();
                        echo $donnees['Nom_categorie'];?></div>
                        <div class="col-7 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=4');
                            $donnees = $sql->fetch();
                            echo $donnees['Nom_categorie'];?></div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-7 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=5');
                                $donnees = $sql->fetch();
                                echo $donnees['Nom_categorie'];?></div>
                                <div class="col-4 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=6');
                                    $donnees = $sql->fetch();
                                    echo $donnees['Nom_categorie'];?></div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-4 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=7');
                                        $donnees = $sql->fetch();
                                        echo $donnees['Nom_categorie'];?></div>
                                        <div class="col-7 text-center genre"><?php $sql = $bd->query('SELECT * FROM categorie where id=8');
                                            $donnees = $sql->fetch();
                                            echo $donnees['Nom_categorie'];?></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
</div>
                        