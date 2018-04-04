
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Komentarai</title>
    </head>
    <body>
        <h1><?= $komentarai[0]['pavadinimas']?></h1>
        <?php foreach($komentarai as $koment): ?>
<h3><?php echo $koment['vardas'] ?></h3>

<h5><?php echo $koment['komentaras'] ?></h5>

<?php endforeach ?>

<br><br>
    </body>


</html>
