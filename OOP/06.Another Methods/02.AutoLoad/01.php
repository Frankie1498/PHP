<?php
    function __autoLoad($className)
    {
        $path = 'class/';
        require_once $path . "{$className}.class.php";
    }
        $cat = new Cat('MiMi');
        $cat->showInfo();
    $lion  = new Lion('LionA');
    $lion->showInfo();

?>