<?php 

class French {

   function greeting() {
      return "Salut!";
   }

   function whats_up() {
      return "Quoi de neuf!?";
   }
}

class FrenchFood extends French {

   var $beef = "la boeuf";
   function beSeated() {
      return "Un table por deux s'il vous plais";
   }

}

$cossette = new FrenchFood();

echo $cossette->whats_up();



?>