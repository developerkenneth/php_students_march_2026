<?php

require_once "FirstClass.php";

class SecondClass extends FirstClass {

        public static $pi = 3.14 ;

        public function __construct(int $age)
        {
            $this->age = $age;
            self::$pi = 45;
        }
        public function get_age(){
            return $this->age;
        }

        public function __destruct()
        {
            echo "<br> bye bye class closed <br>";
        }
        public static function get_pi(){
            return self::$pi;
        }
}