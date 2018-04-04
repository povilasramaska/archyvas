<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$pdo = new PDO('mysql:host=localhost;dbname=filmai', 'root', 'root');

$pdo->exec('SET NAMES UTF8');
if(array_key_exists('k_id', $_GET)){
    $fid=$_GET['k_id'];
}

$sql="SELECT cid, vardas, komentaras, kolekcija.pavadinimas FROM komentarai INNER JOIN kolekcija ON komentarai.filmoID=kolekcija.id
WHERE kolekcija.id=".$fid."";


$query = $pdo->prepare($sql);


$query->execute();

$komentarai = $query->fetchAll(PDO::FETCH_ASSOC);

include "komentarai.view.php"

 ?>
