<?php

class SvgRenderer
{
    public $elements;
    function __construct($width=500,$height=500,$color='white'){
        $this->elements = []; //pasileidzia is karto
        $this->width=$width;
        $this->height=$height;
        $this->color=$color;
    }

    public function drawRectangle($x,$y,$width,$height,$color,$opacity){
     $svg='<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" fill="'.$color.'" opacity="'.$opacity.'" />';

     if($width>$this->width || $height>$this->height){
         throw new Exception("Per daug pavarei, taisyk");
     }

     // echo $svg;

     array_push($this->elements,$svg);
    }

    public function drawCircle($x,$y,$radius,$color,$opacity){
     $svg='<circle cx="'.$x.'" cy="'.$y.'" r="'.$radius.'" fill="'.$color.'" opacity="'.$opacity.'" />';
     // echo $svg;

     array_push($this->elements,$svg);
    }

    public function drawElipse($x,$y,$radiusw,$radiush,$color,$opacity){
     $svg='<ellipse cx="'.$x.'" cy="'.$y.'" rx="'.$radiusw.'"ry="'.$radiush.'" fill="'.$color.'" opacity="'.$opacity.'" />';
     // echo $svg;

     array_push($this->elements,$svg);
    }

    public function drawPolygon($x1,$y1,$x2,$y2,$x3,$y3,$color,$opacity){
     $svg='<polygon points="'.$x1.','.$y1.' '.$x2.','.$y2.' '.$x3.','.$y3.'" fill="'.$color.'" opacity="'.$opacity.'" />';



     array_push($this->elements,$svg);
    }

    public function drawText($x,$y,$font,$fontSize,$content,$color,$opacity){
     $svg='<text x="'.$x.'" y="'.$y.'" font-family="'.$font.'" font-size="'.$fontSize.'" fill="'.$color.'" opacity="'.$opacity.'">'.$content.'</text>';
     // echo $svg;

     array_push($this->elements,$svg);
    }

    public function run1()
    {
        $svg='<svg width="'.$this->width.'" height="'.$this->height.'" style="background-color:'.$this->color.'">';
        $svg.= implode('',$this->elements);
        $svg.='</svg>';

        echo $svg;

    // echo "Engine is running...";
    // var_dump($this->elements);
    }


}

 ?>
