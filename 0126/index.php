<?php
$mas=[];
$read=fopen('file.csv','r');
$i=0;

while(($a=fgetcsv($read)) !==false){
    $mas[]=[
        'name'=>$a[0],
        'age'=>$a[1],
    ];
    $i++;
}
fclose($read);
var_dump($mas);
die();
 ?>
