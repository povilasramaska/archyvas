<?php

if(isset($_GET['okey']))
{
    if($_GET['okey']==1) { echo "<script>alert('Įdėta sekmingai');</script>"; }
    if($_GET['okey']==0) { echo "<script>alert('KLAIDA!');</script>"; }
}

$pdo = new PDO('mysql:host=localhost;dbname=povilas', 'root', 'root');


$pdo->exec('SET NAMES UTF8');




$query = $pdo->prepare
(
    'SELECT
        customers.customerNumber,
        customerName,
        contactFirstName,
        contactLastName,
        employees.firstName AS name1,
        employees.lastName AS name2,
        COUNT(orders.orderNumber) AS skaicius,
        SUM(payments.amount) AS suma
     FROM customers
     INNER JOIN orders ON orders.customerNumber=customers.customerNumber
     INNER JOIN employees ON employees.employeeNumber=customers.salesRepEmployeeNumber
     INNER JOIN payments ON payments.customerNumber=customers.customerNumber
     GROUP BY orders.customerNumber
     ORDER BY skaicius DESC, suma
'

);

$query->execute();


$orders = $query->fetchAll(PDO::FETCH_ASSOC);

include 'clients.view.php'
 ?>
