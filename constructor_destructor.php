<?php 

class Cars {

    public $wheel_count = 4;
    static $door_count = 4;

    function __construct() {
        echo 'I\'m being construced!' . '<br>';
        echo 'Number of doors is ' . self::$door_count++ . '<br>';
        
    }
}

$audi = new Cars();
$mercedes = new Cars();
$bmw = new Cars();

?>