<?php

include "helper1.php";

  $kalba=false;
  $word=false;
if(array_key_exists('kalba', $_GET)){
    $kalba = $_GET['kalba'];
    $word = $_GET['word'];
    $isverstas=versk($word,$kalba);
}

include "indexview.php";

 ?>
