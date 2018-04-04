<?php

class Circle extends Shape {


    public $radius;


    public function draw(SvgRenderer $renderer){
     $renderer->drawCircle($this->location->x,$this->location->y,$this->radius,$this->color,$this->opacity);
    }

    public function setRadius($radius)
    {
        $this->radius=$radius;

    }

}

 ?>
