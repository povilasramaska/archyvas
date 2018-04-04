<?php

class Square extends Rectangle {


    public $width;
    public $height;

    public function __construct(){//defoltines reiksmes
        parent::__construct();

    }

    public function draw(SvgRenderer $renderer){
     $renderer->drawRectangle($this->location->x,$this->location->y,$this->width,$this->height,$this->color,$this->opacity);
    }

    public function setSize($width,$height=0)
    {
        $this->width=$width;
        $this->height=$width;
    }

}

 ?>
