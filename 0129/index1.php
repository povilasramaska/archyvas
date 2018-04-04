<?php
// tiek sekundziu nuo 1970 iki nurodytos
echo "data <br><br>";
$date=mktime(0,0,0,1,29,2014);
echo $date.'<br>';
// isveda data formatu tam tikru
$newDate=date('Y-M-D');
echo $newDate.'<br>';
// isveda nurodyta data
$newDate=date('Y-M-D',$date);
echo $newDate.'<br><br>';
// masyvu rusiavimas
// masyvas
echo "masyvu rusiavimas<br><br>";
$mas=[
    ['name'=>'Petras','age'=>24],
    ['name'=>'Jonas','age'=>21],
    ['name'=>'Marius','age'=>25],
    ['name'=>'Darius','age'=>28],
];
// parodom masyva
foreach($mas as $value){
    echo $value['name'].'<br>';
};
// sukuriam nauja masyva pagal ka rusiuosim(cia pagal name)
$name=[];
foreach ($mas as $value){
    $name[]=$value['name'];
};
// parodom ta masyva pagal kuri rusiuosim
foreach($name as $value){
    echo $value.'<br>';
};
// surusiuojam masyva
array_multisort($name,$mas);
// parodom surusiuota masyva pagal varda
foreach($mas as $value){
    echo $value['name'].'-'.$value['age'].'<br>';
};
// rusiavimas pagal metus
$name1=[];
foreach ($mas as $value){
    $name1[]=$value['age'];
};
// parodom ta masyva pagal kuri rusiuosim
foreach($name1 as $value){
    echo $value.'<br>';
};
// surusiuojam masyva
array_multisort($name1,$mas);
// parodom surusiuota masyva pagal varda
foreach($mas as $value){
    echo $value['name'].'-'.$value['age'].'<br>';
};

 ?>
