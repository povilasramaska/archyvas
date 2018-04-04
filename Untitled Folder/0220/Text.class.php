<?php

class Text extends Shape {


    public $content;
    public $font;
    public $fontSize;


    public function draw(SvgRenderer $renderer){
     $renderer->drawText($this->location->x,$this->location->y,$this->font,$this->fontSize,$this->content,$this->color,$this->opacity);
    }

    public function setFont($font)
    {
        $this->font=$font;
    }

    public function setContent($content)
    {
        $this->content=$content;
    }

    public function setFontSize($fontSize)
    {
        $this->fontSize=$fontSize;
    }
}
 ?>
