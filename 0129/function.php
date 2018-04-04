<?php
function getCsvFile(){
$read =fopen('todo.csv','r');
$todo=[];
$i=0;
while (($a=fgetcsv($read))!==false){
$todo[]=[
"title"=>$a[0],
"description"=>$a[1],
"deadline"=>$a[2],
"priority"=>$a[3],
"done"=>$a[4],
];
$i++;
}
fclose($read);
return $todo;
}


function addToCsv($title,$description,$deadline,$priority){
    $write=fopen('todo.csv','a');
    fputcsv($write,[
        $title,
        $description,
        $deadline,
        $priority,
        "neatlikta",
    ]);
    fclose($write);
}

function addArrayToCsv($todo){
    $write = fopen('todo.csv','w');

    foreach ($todo as $value) {
    fputcsv($write, $value);
}

fclose($write);
return $todo;
}

function updateToCsv($id, $title, $description,$deadline,$priority){
$todo=getCsvFile();
$todo[$id]['title']=$title;
 $todo[$id]['description']=$description;
 $todo[$id]['deadline']=$deadline;
 $todo[$id]['priority']=$priority;
 addArrayToCsv($todo);
}

 ?>
