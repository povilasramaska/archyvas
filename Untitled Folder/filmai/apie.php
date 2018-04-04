<?php
if(isset($_GET['pavadinimas'])) {
       $pavadinimas = $_GET['pavadinimas'];
       $pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');
       $pdo->exec('SET NAMES UTF8');
     $sql='SELECT pavadinimas, trukme, metai, aprasymas FROM kolekcija WHERE pavadinimas="'.$pavadinimas.'"';
     $query = $pdo->prepare($sql);
     $query->execute();
     $filmas=$query->fetch();
 };





include "apie.view.php";
 ?>
