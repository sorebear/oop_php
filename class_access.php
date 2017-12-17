<?php 

class Car {

   public $wheel_count = 4;
   private $door_count = 4;
   protected $cylindars = 8;
   
   function car_detail() {
      echo $this->wheel_count . '<br>';
      echo $this->door_count . '<br>';
      echo $this->cylindars . '<br>';

   }

}

$toyota = new Car();
$honda = new Car();

echo $honda->wheel_count;
echo $honda->door_count;
echo $honda->cylindars;

$honda->car_detail();

?>