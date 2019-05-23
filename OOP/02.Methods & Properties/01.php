<?php
class Cat {
    var $name = "Kitty";
    var $color = "Yellow";
    var $age = 1;
}
$catA = new Cat();
echo 'Name: '. $catA->name;
echo '<br/ >Color: '. $catA->color;
echo '<br/ >Age: '. $catA->age;
?>
