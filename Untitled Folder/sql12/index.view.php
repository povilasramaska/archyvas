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
            <caption>Purchase list</caption>
            <thead>
                <tr>
                    <th>Purchase</th>
                    <th>Date of purchase</th>
                    <th>requiredDate</th>
                    <th>Date of delivery</th>
                    <th>Status</th>
                    <th>Client</th>
                    <th>KIEK</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td>
                            <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a>
                        </td>
                        <td><?php echo $order['orderDate']; ?></td>
                        <td><?php echo $order['aaa']; ?></td>
                        <td><?php echo $order['shippedDate']; ?></td>
                        <td><?php echo $order['status']; ?></td>
                        <td><?php echo $order['customerName']; ?></td>
                        <td><?php echo $order['kiek_pr']; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</body>
</html>