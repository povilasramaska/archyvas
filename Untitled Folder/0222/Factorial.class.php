<?php
class Factorial{

public $fact;

public function faktorialas($fact){

   $this->fact=$fact;


   $n = $fact;
   $x = 1;
   for($i=1;$i<=$n-1;$i++)
   {
    $x*=($i+1);
   }



   echo "faktorialas   ".$fact." yra :  ".$x;
}



}




 ?>
