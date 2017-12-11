<?php 

class Cars {

    static $wheel_count = 4;
    static $door_count = 4;

    static function car_detail() {

        return 'Wheel Count ' . self::$wheel_count;
        return 'Door Count ' . self::$door_count;
        
    }
}

class Trucks extends Cars {

    static function display() {

        echo parent::car_detail();

    }
}


Trucks::display();


?>