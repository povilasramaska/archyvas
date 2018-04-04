<?php

class Elipse extends Shape {


    public $radiush;
    public $radiusw;


    public function draw(SvgRenderer $renderer){
     $renderer->drawElipse($this->location->x,$this->location->y,$this->radiush,$this->radiusw,$this->color,$this->opacity);
    }

    public function setRadiuss($radiush,$radiusw)
    {
        $this->radiush=$radiush;
        $this->radiusw=$radiusw;
    }

}

 ?>
