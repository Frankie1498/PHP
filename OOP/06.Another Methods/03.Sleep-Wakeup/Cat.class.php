<?php
class Cat {
    //Properties
    public $name;
    public $color;
    public $age;
    public $weight;
    //
    public function __construct($name = 'Doremon',$color = 'Blue',$age = 10,$weight='5kg'){
        // Nếu không truyền tham số thì lấy tham số mặc định
        //echo 'Construct() có tham số';
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
        $this->weight = $weight;
    }
    public  function __sleep()
    {
        return array('name','color','age');
    }
    public function __wakeup()
    {
        $this->name = 'Doremon';
        $this->color = 'blue';
        $this->age = 10;
        $this->weight = '5kg';
    }

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
    }
}
?>