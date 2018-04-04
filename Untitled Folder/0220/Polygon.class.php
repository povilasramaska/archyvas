<?php

class Polygon extends Shape {


    public $x1;
    public $y1;
    public $x2;
    public $y2;
    public $x3;
    public $y3;


    public function draw(SvgRenderer $renderer)
    {
     $renderer->drawPolygon($this->x1,$this->y1,$this->x2,$this->y2,$this->x3,$this->y3,$this->color,$this->opacity);
    }

    public function setPoints($x1,$y1,$x2,$y2,$x3,$y3)
    {
        $this->x1=$x1;
        $this->y1=$y1;
        $this->x2=$x2;
        $this->y2=$y2;
        $this->x3=$x3;
        $this->y3=$y3;
    }

}

 ?>
