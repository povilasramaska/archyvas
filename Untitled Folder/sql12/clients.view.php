<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="order-form.css">
</head>
<body>
    <section>
        <h1>Purchase orders</h1>

        <table class="standard-table">
            <caption>Client list</caption>
            <thead>
                <tr>
                    <th>kliento pavadinimas</th>
                    <th>kontakto vardas</th>
                    <th>kontakto pavarde</th>
                    <th>uzsakymu skaicius</th>
                    <th>isleistu pinigu suma</th>
                    <th>aptarnaujancio darbuotojo vardas</th>
                    <th>aptarnaujancio darbuotojo pavarde</th>
                    <th>istrinti klienta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td>
                            <a href="new_client.php?edit_id=<?= $order['customerNumber'] ?>"><?= $order['customerName'] ?></a>
                        </td>

                        <td><?php echo $order['contactFirstName'] ?></td>
                        <td><?php echo $order['contactLastName'] ?></td>
                        <td><?php echo $order['skaicius'] ?></td>
                        <td>&euro; <?php echo number_format($order['suma'],2,"."," ") ?></td>
                        <td><?php echo $order['name1'] ?></td>
                        <td><?php echo $order['name2'] ?></td>
                        <td>
                            <a href="delete_client.php?delete_id=<?= $order['customerNumber'] ?>">Istrinti Si klienta</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</body>
</html>
