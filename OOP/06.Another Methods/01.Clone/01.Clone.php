<?php
require_once ('Class.Cat.php');
$catA = new  Cat('Mimi','BLue',2,'5kg');
$catB = clone $catA;//clone nếu thay đổi catB thì catA không thay đổi theo
$catB->setName('Kitty');
$catB->setColor('Red');
$catB->setAge(3);
$catA->showInfo();
echo '<br><hr>';
$catB->showInfo();