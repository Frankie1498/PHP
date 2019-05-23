<?php
require_once ('Class_Cat.php');
$catA = new Cat();
$catA->setName('MiMi');
$catA->setColor('White');
$catA->setAge('1');
$catA->showInfo();
$catB = new Cat();
$catB->setName('Kitty');
$catB->setColor('Black');
$catB->setAge('2');
$catB->showInfo();

?>
