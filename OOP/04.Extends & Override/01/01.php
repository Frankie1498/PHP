<?php
require_once ('Lion.php');
$arrInfo = array(
    'name' => 'Lion A',
    'color' => 'Yellow',
    'age' => 3,
    'weight' => '120 kg'
);
$lionA = new Lion($arrInfo);
 echo '<pre>';
 print_r($lionA);
 echo '</pre>';
 //echo $lionA->showInfo();
?>