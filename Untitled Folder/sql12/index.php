<?php

/*
 * Builds a PDO object acting as a representative for the database connection.
 *
 * The first argument is a Data Source Name (DSN) standing for
 * where to connect. An IP address or domain name can be specified.
 *
 * /!\ Must be lowercase and without spaces /!\
 *
 */
$pdo = new PDO('mysql:host=localhost;dbname=povilas', 'root', 'root');

// Sets the PHP <-> MySQL link, data encoded in UTF-8.
$pdo->exec('SET NAMES UTF8');



/*
 * Sets the SQL query, PDO returns a PDOStatement class object.
 * http://www.php.net/manual/fr/class.pdostatement.php
 *
 * This object stands for the SQL query,
 * so we'll call it $query.
 */
$query = $pdo->prepare
(
    'SELECT
        orders.orderNumber,
        orderDate,
        shippedDate,
        status,
        requiredDate,
        customerName,
        COUNT(orderLineNumber) as kiek
     FROM orders
     INNER JOIN customers ON customers.customerNumber=orders.customerNumber
     INNER JOIN orderdetails ON orders.orderNumber=orderdetails.orderNumber
     GROUP BY orders.orderNumber
     HAVING kiek>15
     ORDER BY  kiek DESC, orderDate'
);

// Tells PDO to send the query to MySQL.
$query->execute();

/*
 * Gets all the data sended by MySQL.
 *
 * The fetchAll() method returns a two dimensions array :
 * - First dimension is the differents data line
 * - Second dimension is the SQL columns of each data lines
 */
$orders = $query->fetchAll(PDO::FETCH_ASSOC);



include 'index.view.php';
