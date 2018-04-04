<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_POST['pavadinima']) && (strlen($_POST['pavadinima'])>0)) {
      $search=$_POST['pavadinima'];
      $pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');

      $pdo->exec('SET NAMES UTF8');
      $sql="SELECT pavadinimas FROM kolekcija WHERE pavadinimas LIKE '%{$search}%'";
      $query = $pdo->prepare($sql);
      $query->execute();
      $results=$query->fetchAll();

      echo json_encode($results);
  }else {
      $results=[];
      echo json_encode($results);
  }





 ?>
