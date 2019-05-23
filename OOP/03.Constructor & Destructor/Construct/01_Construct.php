<?php
require_once('Class.Cat.php');
$arrCatA = array(
    'name' => 'Sung',
    'color'=> 'Black',
    'age'=>1,
    'weight'=>5
);
$catA = new Cat($arrCatA);
$catA->showInfo();
?>
