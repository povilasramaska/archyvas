<?php
include "function.php";
$id=$_GET['id'];
$todo=getCsvFile();
// var_dump($todo[$id]['title']);die();
include "view/edit.view.php"

//
// addArrayToCsv($todo);
//
// header("Location:index.php");


 ?>
