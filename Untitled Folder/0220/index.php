<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);

include 'Point.class.php';
include 'Shape.class.php';
include 'Circle.class.php';
include 'Rectangle.class.php';
include 'Square.class.php';
include 'Elipse.class.php';
include 'Polygon.class.php';
include 'Text.class.php';
include 'Program.class.php';
include 'SvgRenderer.class.php';

$program = new Program();
$renderer= new SvgRenderer(400,400,'grey');
 ?>


 <!DOCTYPE html>
 <html>
 <body>

     <?php $program->run($renderer); ?>

 <!-- <svg width="1000" height="1000">
   <circle cx="500" cy="400" r="150" stroke="green" stroke-width="4" fill="yellow" />
   <rect x="100" y="250" width="200" height="100" fill="rgba(0,0,255,0.7)" stroke-width="5" stroke="rgb(0,0,0)" />
    <ellipse cx="800" cy="400" rx="45" ry="95" fill="green" />
    <rect x="570" y="350" width="100" height="100"  fill="rgba(0,0,255,0.5)" stroke-width="5" stroke="rgb(0,0,0)" />
    <polygon points="300 100,300 280,450 280" fill="lime" stroke="purple" stroke-width="5" fill-rule="evenodd" />
 </svg> -->

 </body>
 </html>
