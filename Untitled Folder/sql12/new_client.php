<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="order-form.css">
    <style type="text/css">
        input {width: 90%; padding: 10px;}
        label {width: 100%; text-align: center; padding-right: 15px; display: block; font-weight: 800; margin-top: 15px;}
    </style>
</head>
<?php

$pdo = new PDO('mysql:host=localhost;dbname=povilas', 'root', 'root');
$pdo->exec('SET NAMES UTF8');
$query = $pdo->prepare
(
   'SELECT
       employeeNumber,firstName,lastName
    FROM employees
    ORDER BY  firstName'
);
$query->execute();
$employees= $query->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['edit_id'])) {
       $query = $pdo->prepare
       (
           'SELECT customerNumber, customerName, contactFirstName, contactLastName, phone, addressLine1,
            city, state, postalCode, country, creditLimit, salesRepEmployeeNumber FROM customers WHERE customerNumber = ?'
       );
       $query->execute(array($_GET['edit_id']));
       $edit_client = $query->fetch(PDO::FETCH_ASSOC);


   }

 ?>
<body>
    <section>
        <h1>Klientų įvedimas</h1>

        <?php if(isset($_GET['edit_id'])) { ?>
               <form action="new_client_update.php" method="POST">
           <?php } else { ?>
               <form action="new_client_post.php" method="POST">
           <?php } ?>
                <div style="width: 50%; float: left;">
                    <label>Kliento Nr.</label>
                    <input type="number" value="<?=$edit_client['customerNumber']; ?>" name="clientNumber" min="0" step="1">
                    <label>Kliento pavad.</label>
                    <input type="text" value="<?=$edit_client['customerName']; ?>" name="clientName">
                    <label>Kontakto vardas </label>
                    <input type="text" value="<?=$edit_client['contactFirstName']; ?>" name="contactFirstName">
                    <label>Kontakto pavardė</label>
                    <input type="text" value="<?=$edit_client['contactLastName']; ?>" name="contactLastName">
                    <label>Tel.</label>
                    <input type="text" value="<?=$edit_client['phone']; ?>" name="phone">
                    <label>Darbuotojas</label>
                    <select name="employee">
                           <?php foreach($employees as $var) {
                               echo "<option value='".$var['employeeNumber']."'";
                               if ($edit_client['salesRepEmployeeNumber']==$var['employeeNumber']){
                                   echo "SELECTED";
                               }
                               echo ">".$var['firstName']." ".$var['lastName']."</option>";
                           } ?>
                       </select>
                </div>
                <div style="width: 50%; float: right;">
                    <label>Adresas1</label>
                    <input type="text" value="<?=$edit_client['addressLine1']; ?>" name="addressLine1">
                    <label>MIestas</label>
                    <input type="text" value="<?=$edit_client['city']; ?>" name="city">
                    <label>STATE</label>
                    <input type="text" value="<?=$edit_client['state']; ?>" name="state">
                    <label>ZIP</label>
                    <input type="text" value="<?=$edit_client['postalCode']; ?>" name="postalCode">
                    <label>Šalis</label>
                    <input type="text" value="<?=$edit_client['country']; ?>" name="country">
                    <label>Kredito limitas</label>
                    <input type="number" value="<?=$edit_client['creditLimit']; ?>" name="creditLimit" min="0" step="0.01">
                </div>
                <div style="width: 100%; text-align: center;">
                    <input type="submit" name="Įrašyti" style="margin-top: 25px;">
                </div>
            </form>


    </section>
</body>
</html>
