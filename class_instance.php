<?php 

class Car {
   
   function greeting() {
      echo "Salut!";
   }

   function goodbye() {
      echo "Au revoir";
   }

}

$toyota = new Car();

$honda = new Car();

$honda -> greeting();

?>