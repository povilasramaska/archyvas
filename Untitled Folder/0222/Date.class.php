<?php

class Datos {

    public $date_1;
    public $date_2;

public function dateDifference($date_1 , $date_2)
{
    $this->date_1=$date_1;
    $this->date_2=$date_2;
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);

    echo $interval->format('%y Year %m Month %d Day');

}






}



 ?>
