<?php 

class Car {

   private $door_count = 4;
   
   function get_values() {
      echo $this->door_count;
      echo "<br>";
   }

   function set_values($newNumber) {
      $this->door_count = $newNumber;
   }

}

$honda = new Car();
$honda->get_values();
$honda->set_values(2);
$honda->get_values();

?>