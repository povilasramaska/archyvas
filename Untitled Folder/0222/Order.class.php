<?php

class Order {

public $m;

public function rusiuok($m){
$this->m=$m;

asort($m);

foreach ($m as $k) {
    echo $k." ";
}

}
}


 ?>
