<?php

$pdo = new PDO('mysql:host=localhost;dbname=povilas', 'root', 'root');
$pdo->exec('SET NAMES UTF8');


if(isset($_GET['delete_id'])) {
       $id = $_GET['delete_id'];

     $sql='DELETE FROM orderdetails WHERE orderNumber IN (SELECT orderNumber FROM orders WHERE customerNumber='.$id.');
     DELETE FROM orders WHERE customerNumber='.$id.';
     DELETE FROM payments WHERE customerNumber='.$id.';
     DELETE FROM customers WHERE customerNumber='.$id;

   }

   $query = $pdo->prepare($sql);
   $query->execute();
	header("Refresh:1; url=clients.php");

    ?>
