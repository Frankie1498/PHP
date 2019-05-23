<?php
    require_once 'Cat2.class.php';
    $cat = new Cat2();
    $cat->age = 10;
    $cat->name = 'MiMi';
    $cat->color = 'White';
    echo '<pre>';
    print_r($cat);
    echo '</pre>';
    echo $cat->name;
?>