<?php

class Program
{
    public function run(SvgRenderer $renderer)//class injection
    {
    echo "Program is running...";
    $rectangle1=new Rectangle();
    $rectangle1->setLocation(0,0);
    $rectangle1->setSize(400,100);
    $rectangle1->setColor('blue');
    $rectangle1->setOpacity(0.7);
    $rectangle1->draw($renderer);

    $circle1=new Circle();
    $circle1->setLocation(150,250);
    $circle1->setRadius(100);
    $circle1->setColor('red');
    $circle1->setOpacity(0.7);
    $circle1->draw($renderer);

    $elipse1=new Elipse();
    $elipse1->setLocation(200,200);
    $elipse1->setRadiuss(100,200);
    $elipse1->setColor('blue');
    $elipse1->setOpacity(0.7);
    $elipse1->draw($renderer);

    $rectangle1=new Square();
    $rectangle1->setLocation(0,0);
    $rectangle1->setSize(200);
    $rectangle1->setColor('blue');
    $rectangle1->setOpacity(0.3);
    $rectangle1->draw($renderer);

    $polygon1=new Polygon();
    $polygon1->setPoints(0,0,0,60,60,60);
    $polygon1->setColor('green');
    $polygon1->setOpacity(0.7);
    $polygon1->draw($renderer);

    $polygon1=new Polygon();
    $polygon1->setPoints(100,100,100,60,60,60);
    $polygon1->setColor('red');
    $polygon1->setOpacity(0.7);
    $polygon1->draw($renderer);


    $text = new Text();
    $text->setLocation(100,100);
    $text->setContent('Tekstukas');
    $text->setColor('red');
    $text->setFontSize('35');
    $text->setFont('Verdana');
    $text->draw($renderer);

    $polygon1=new Polygon();
    $polygon1->setPoints(200,100,200,60,60,60);
    $polygon1->setColor('pink');
    $polygon1->setOpacity(0.7);
    $polygon1->draw($renderer);

    $elipse1=new Elipse();
    $elipse1->setLocation(300,200);
    $elipse1->setRadiuss(100,30);
    $elipse1->setColor('black');
    $elipse1->setOpacity(0.7);
    $elipse1->draw($renderer);

    $text = new Text();
    $text->setLocation(10,200);
    $text->setContent('Tekstukas');
    $text->setColor('black');
    $text->setFontSize('76');
    $text->setFont('Verdana');
    $text->draw($renderer);



    // print_r($rectangle1);

    // $renderer->drawRectangle(0,0,100,200,'green',0.5);
    // $renderer->drawRectangle(60,20,100,100,'red',0.7);
    $renderer->run1();
    }
}

 ?>
