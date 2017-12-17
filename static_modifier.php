<?php 

class Car {

   static $wheel_count = 4;
   static $door_count = 4;
   
   static function car_detail() {
      echo Car::$wheel_count . '<br>';
      echo Car::$door_count . '<br>';

   }

}

Car::car_detail();

?>