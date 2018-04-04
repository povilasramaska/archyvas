<?php

class Shape{

    public $location;

    public $color;
    public $opacity;

    public function __construct(){//defoltines reiksmes


        $this->location= new Point();
        $this->color='black';
        $this->opacity=0.8;

    }

    public function setLocation($x,$y)
    {
        $this->location->x=$x;
        $this->location->y=$y;
    }

    public function setColor($color){
        $this->color=$color;
    }

    public function setOpacity($opacity){
        $this->opacity=$opacity;
    }

}


 ?>
