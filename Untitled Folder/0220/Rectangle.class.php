<?php

class Rectangle extends Shape {


    public $width;
    public $height;


    public function draw(SvgRenderer $renderer){
     $renderer->drawRectangle($this->location->x,$this->location->y,$this->width,$this->height,$this->color,$this->opacity);
    }

    public function setSize($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }

}

 ?>
