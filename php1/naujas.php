<?php
if(array_key_exists('nword', $_GET)){
    $nword = $_GET['nword'];
     $kalba=$_GET['kalba'];
     $word=$_GET['word'];
    echo $nword;
    echo $kalba;
    echo $word;
};

include "indexview.php";
 ?>
