<?php
class Calculator{

public $k;
public $l;

public function suma($k,$l){
$this->k=$k;
$this->l=$l;

$sum=$k+$l;
echo $k."+".$l."=  ".$sum."<br>";
}

public function skirtumas($k,$l){
$this->k=$k;
$this->l=$l;

$skirtum=$k-$l;
echo $k."-".$l."=  ".$skirtum." <br>";
}
public function daugyba($k,$l){
$this->k=$k;
$this->l=$l;

$daugyb=$k*$l;
echo $k." x ".$l."=  ".$daugyb." <br>";

}
public function dalyba($k,$l){
$this->k=$k;
$this->l=$l;

$dalyb=$k/$l;
echo $k." : ".$l."=  ".$dalyb."<br>";

}
}

 ?>
