<?php

include "function.php";
if(array_key_exists('id', $_GET)){
    $id=$_GET['id'];
}
if(array_key_exists('title', $_POST)){
    $title=$_POST['title'];
}
if(array_key_exists('description',$_POST)){
    $description=$_POST['description'];
}
if(array_key_exists('year',$_POST)){
    $year=$_POST['year'];
}
if(array_key_exists('month',$_POST)){
    $month=$_POST['month'];
}
if(array_key_exists('day',$_POST)){
    $day=$_POST['day'];
}
if(array_key_exists('priority',$_POST)){
    $priority=$_POST['priority'];
}
$deadline=mktime(0,0,0,$month,$day,$year);

updateToCsv($id, $title, $description,$deadline,$priority);
header("location:index.php");
 ?>
