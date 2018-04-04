<?php
include "helper.php";
$name = null;

if(array_key_exists('name', $_GET)){
    $name = $_GET['name'];
    $newName=changeName($name);
}
include "indexview.php";

?>
