<?php
session_start();

include "function.php";
// var_dump($_GET);die();
$mas=getCsvFile();
$count = count($mas);
$perPage=4;
$pageCount=ceil($count/$perPage);
$psl=1;
if(array_key_exists('psl', $_GET)){
    $psl=$_GET['psl'];
}
$from=$perPage*($psl-1);
$till=$perPage*$psl-1;
if ($till>($count-1)){
    $till=$count-1;
}


include "view/index.view.php";
 ?>
