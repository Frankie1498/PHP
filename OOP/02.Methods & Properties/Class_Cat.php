<?php
class Cat {
    //Properties
    public $name;
    public $color;
    public $age;
    //Methods
    public  function getColor(){
        return $this->color;
    }
    public  function getName(){
        return $this->name;
    }public  function getAge(){
    return $this->age;
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
    public function showInfo(){
        echo '<br>Name:'.$this->getName();
        echo '<br>Color:'.$this->getColor();
        echo '<br>Age:'.$this->getAge();
    }
}
?>