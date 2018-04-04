
 <?php

 error_reporting(E_ALL);
 ini_set('display_errors', 1);


 $pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');

 $pdo->exec('SET NAMES UTF8');



 $sql = "UPDATE kolekcija SET pavadinimas='".$_POST['pavadinimas']."', metai='".$_POST['metai']."',
  kokybe='".$_POST['kokybe']."', trukme='".$_POST['trukme']."', aprasymas='".$_POST['aprasymas']."', foto='".$_POST['foto']."',
   video='".$_POST['video']."' WHERE id ='".$_GET['id']."'";


   $query=$pdo->prepare($sql);
 	$query->execute();

 header("Refresh:1; url=index.php");


  ?>
