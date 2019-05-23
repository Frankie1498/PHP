<?php
class Cat {
    //Properties
    public $name;
    public $color;
    public $age;
    public $weight;
    public $maxSpeed = '20 km/h';
    //Methods
    /*__construct
    public function __construct(){
        echo __METHOD__;
        $this->name = 'Kitty';
        $this->color = 'Blue';
        $this->age = 2;
    }*/
    //__construct có tham số
    /*
    public function __construct($name = 'Doremon',$color = 'Blue',$age = 10){
        // Nếu không truyền tham số thì lấy tham số mặc định
        //echo 'Construct() có tham số';
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }*/
    //Construct = tên class

    public function Cat($name = 'Doremon',$color = 'Blue',$age = 10,$weight = '5kg'){
        // function đặt tên trùng với class được coi là consttuct của class
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
        $this->weight = $weight;
    }/*
    public function __construct($arrInfo){
        // construct với tham số là mảng
        $this->name = $arrInfo['name'];
        $this->color = $arrInfo['color'];
        $this->age = $arrInfo['age'];
        $this->weight = $arrInfo['weight'];
    }*/
    public  function getColor(){
        return $this->color;
    }
    public  function getName(){
        return $this->name;
    }
    public  function getAge(){
    return $this->age;
    }
    public  function getWeight(){
        return $this->weight;
    }
    public function setName($value){
        $this->name = $value;
    }
    public function setColor($value){
        $this->color = $value;
    }
    public function setAge($value){
        $this->age = $value;
    }
    public function setWeight($value){
        $this->weight = $value;
    }
    public function showInfo(){
        echo '<br>Name:'.$this->getName();
        echo '<br>Color:'.$this->getColor();
        echo '<br>Age:'.$this->getAge();
        echo '<br>Weight:'.$this->getWeight();
        echo '<br>maxSpeed:'.$this->maxSpeed;
        //  echo '<br>maxSpeed Cat:'.Cat::$maxSpeed;
    }
}

?>