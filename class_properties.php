<?php 

class Car {

   var $wheel_count = 4;
   var $door_count = 4;
   
   function car_detail() {
      return "Vroom vroom! This car has " . $this->wheel_count . " wheels";
   }

}

$toyota = new Car();
$honda = new Car();

echo $honda->car_detail();

?>