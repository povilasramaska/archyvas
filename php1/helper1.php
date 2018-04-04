<?php
function versk($word,$kalba){
$zodynas=readcsv();
$isverstas="tokio nera";
switch ($kalba) {
    case 'LT':
        foreach($zodynas as $row){
            if ($row["LT"]==$word){

                $isverstas=$row["EN"];
            }
        }
        break;
        case 'EN':
            foreach($zodynas as $row){
                if ($row["EN"]==$word){
                    $isverstas=$row["LT"];
                }
            }
            break;
    default:
        $isverstas="tokio zodzio nera";

}
return $isverstas;
return $kalba;
return $word;

}

function readcsv(){
    $read=fopen('file1.csv','r');
    $zodynas=[];
    $i=0;

    while(($a=fgetcsv($read)) !==false){
        $zodynas[]=[
            'EN'=>$a[0],
            'LT'=>$a[1]
        ];
        $i++;
    }
    fclose($read);
    // var_dump($zodynas);
    // die();
    return $zodynas;
}

 ?>
