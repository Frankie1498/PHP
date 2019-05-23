<?php

    class Cat{
        private $name;
        private $age;
        public function __construct()
        {
            $this->name = 'Doremon';
            $this->age = '10';
        }
        public function __set($name, $value)
        {
           return $this->name = $value;
        }
        public function __get($name)
        {
            return $this->name;
        }

        public function showInfo(){
            echo 'Name: '. $this->name . '<br>Age:' . $this->age;
        }
    }
?>
