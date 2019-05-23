<?php

require_once ('Class.Cat.php');
class Lion extends Cat
{
    public $height = '120';
    public  function getHeight(){
        return $this->height;
    }
    public function setHeight($value){
        $this->name = $value;
    }
    public function showInfo()
    {
        echo '<br>Name:' . $this->getName();
        echo '<br>Color:' . $this->getColor();
        echo '<br>Age:' . $this->getAge();
        echo '<br>Weight:' . $this->getWeight();
        echo '<br>Height:' . $this->getHeight();
    }
}