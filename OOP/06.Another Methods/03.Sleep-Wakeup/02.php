<?php
//wakeup làm sạch đối tượng như mới khởi tạo ban đầu => ko phải khởi tạo thêm lần nữa
    require_once ('Cat.class.php');
    $cat = new Cat('MiMi');
    $cat->showInfo();
    $strCat = serialize($cat);
    echo '<br>'.$strCat;
    $objCat = unserialize($strCat);
    echo '<pre>';
    print_r($objCat);
    echo '</pre>'
?>