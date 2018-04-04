<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET['r_id'])) {
       $id = $_GET['r_id'];
       $pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');
       $pdo->exec('SET NAMES UTF8');
       $query = $pdo->prepare
       (
           'SELECT
              *
            FROM kolekcija
            WHERE id='.$id

       );

       $query->execute();

       $filmai = $query->fetch(PDO::FETCH_ASSOC);
   }

include "redaguokforma.php"




    ?>
