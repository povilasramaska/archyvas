<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');
$pdo->exec('SET NAMES UTF8');


if(isset($_GET['t_id'])) {
       $id = $_GET['t_id'];
     $sql='DELETE FROM kolekcija WHERE id='.$id;
   }



   $query = $pdo->prepare($sql);
   $query->execute();
	header("Refresh:1; url=index.php");
    ?>
