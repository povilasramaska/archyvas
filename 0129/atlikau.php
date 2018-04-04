<?php
include "function.php";
$id=$_GET['id'];
$todo=getCsvFile();
$todo[$id]['done']="atlikta";
addArrayToCsv($todo);

header("Location:index.php");


 ?>
