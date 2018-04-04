<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');

$pdo->exec('SET NAMES UTF8');



$sql = 'INSERT INTO kolekcija (pavadinimas, metai, trukme, kokybe, foto, video, aprasymas)
 VALUES ("'.$_POST['pavadinimas'].'", "'.$_POST['metai'].'", "'.$_POST['trukme'].'", "'.$_POST['kokybe'].'",
  "'.$_POST['foto'].'", "'.$_POST['video'].'","'.$_POST['aprasymas'].'")';


  $query=$pdo->prepare($sql);
  $query->execute();

header("Refresh:1; url=index.php");


 ?>
