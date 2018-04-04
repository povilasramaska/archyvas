<?php


function versk($word,$kalba){
$zodynas=readcsv();
switch ($kalba) {
    case 'EN':
        if(array_key_exists($word,$zodynas)){
            $isverstas=$zodynas[$word];
        }else{
            $isverstas="anglisko zodzio neradome";
        }
        break;
    case 'LT':
        if(in_array($word,$zodynas)){
            $isverstas=array_search($word,$zodynas);
        }else{
            $isverstas="lietuvisko tokio neradome";
        }
        break;
    default:
        $isverstas="tokio nera";
        break;
}
return $isverstas;

}

function readcsv(){
    $zodynas=[];
    $read=fopen('file1.csv','r');
    $i=0;

    while(($a=fgetcsv($read)) !==false){
        $zodynas[]=[
            'lt'=>$a[0],
            'en'=>$a[1],
        ];
        $i++;
    }
    fclose($read);
    var_dump($zodynas);
    die();
}

 ?>
