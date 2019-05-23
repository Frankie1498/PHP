<?php

    class Cat2{
        private $info;
        public function __construct()
        {
            $this->name = 'Doremon';
            $this->age = '10';
        }
        public function __set($name, $value)
        {
           return $this->info[$name] = $value;
        }
        public function __get($name)
        {
            return $this->info[$name];
        }

        public function showInfo(){
            echo 'Name: '. $this->name . '<br>Age:' . $this->age;
        }
    }
?>
