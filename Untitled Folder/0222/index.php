<?php include 'Name.class.php'; ?>
<?php include 'Hallo.class.php'; ?>
<?php include 'Factorial.class.php'; ?>
<?php include 'Order.class.php'; ?>
<?php include 'Calculator.class.php'; ?>
<?php include 'Date.class.php'; ?>

<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Uzduotis</title>
    </head>
    <body>
<h2>
1.
<?php
$a=new Name();
$a->rasyk();
 ?>
</h2>
<h2>
2.
<?php
$b=new Hallo();
$b->hi('Povilas');
 ?>
</h2>
<h2>
3.
<?php
$c=new Factorial();
$c->faktorialas(5);
 ?>
</h2>
<h2>
4.
<?php
$d=new Order();
$m=[2,1,4,-6];
$d->rusiuok($m);
 ?>
</h2>
<h2>
5.
<br>
<?php
$e=new Calculator();
$e->suma(4,2);
$e->skirtumas(4,6);
$e->daugyba(6,2);
$e->dalyba(6,3);

 ?>
</h2>
<h2>
6.
<br>
<?php
$f=new Datos();
$f->dateDifference('2016-01-01','2018-02-04');

 ?>
</h2>
    </body>
</html>
