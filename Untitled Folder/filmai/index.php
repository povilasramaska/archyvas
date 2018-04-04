<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');

$pdo->exec('SET NAMES UTF8');

$query2 = $pdo->prepare
(
    'SELECT
        COUNT(*) as skaicius
     FROM kolekcija
'
);
$query2->execute();

$viso = $query2->fetch(PDO::FETCH_ASSOC);
$count = $viso['skaicius'];
$perPage=4;
$pageCount=ceil($count/$perPage);
$psl=1;
if(array_key_exists('psl', $_GET)){
    $psl=$_GET['psl'];
}
$from=$perPage*($psl-1);

$sort="id";
if(array_key_exists('s_id', $_GET)){
    $sort=$_GET['s_id'];
    if ($sort==1){
        $sort="pavadinimas";
    }
    if($sort==2){
        $sort="metai";
    }

}

$sql="SELECT id, pavadinimas, metai, trukme, kokybe, foto, video, aprasymas FROM kolekcija ORDER BY ".$sort." LIMIT ".$from.", ".$perPage."";


$query = $pdo->prepare($sql);


$query->execute();

$filmai = $query->fetchAll(PDO::FETCH_ASSOC);





include 'index.view.php';

 ?>
