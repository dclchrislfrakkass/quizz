<?php include '../_navbar.php'; ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--test script <script>

    $.getJSON("pdo.JSON", function( data){
      
        console.log($dec['host']);
    var items = [];
    // console.log(items);
        $.each( data, function( id, val){
        items.push("$" +id+ "=" +val);
    });
console.log(items);
    });

    
    </script> -->


</header>
<body>
 <?php

try {
    $json =file_get_contents('pdo.JSON');
    $dec=json_decode($json, true);
    var_dump($dec['user']);
    $bd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
    //stock url 51.254.203.143
    $bd->exec('SET NAMES utf8');
    
    // echo 'Connexion OK';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
//     ?>


<?php
    

include '../_footer.php' ?>