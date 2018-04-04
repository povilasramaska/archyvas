<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);

class A {

    public $viesas=1;
    private $pasleptas=2;
    protected $pusiau=3;

public function out(){
    echo $this->viesas;
    echo $this->pasleptas;
    echo $this->pusiau;
}


}
class B extends A {
    public function out2(){
        echo $this->viesas;//veikia
        echo $this->pasleptas;//neveikia
        echo $this->pusiau;//veikia
    }
}

$a= new A();
$b=new B();
// $a->out();
echo "<pre>";
var_dump($a);
var_dump($b);
echo "</pre>";

// B klases isoreje pasiekiamas tik viesas
// echo $b->viesas;
// echo $b->pusiau;
// echo $b->pasleptas;

 $b->out2();
 ?>
